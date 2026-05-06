<?php
/**
 * Plugin Name: Decimales WooCommerce definitivo
 * Description: 3 decimales en catálogo, 2 decimales en carrito, checkout y facturas.
 * Version: 1.0
 * Author: ChatGPT
 */

/* ===============================
   1️⃣ Carrito y Checkout (Bloques)
   =============================== */
add_action('wp_footer', function() {
    if (is_cart() || is_checkout()) {
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {

            function fixPrices() {
                document.querySelectorAll('.wc-block-components-formatted-money-amount').forEach(function(el) {
                    
                    let text = el.innerText;

                    // Extraer número (soporta coma o punto)
                    let number = text.replace(/[^\d,.-]/g, '').replace(',', '.');

                    let parsed = parseFloat(number);

                    if (!isNaN(parsed)) {
                        let formatted = parsed.toFixed(2);

                        // Mantener separador original
                        if (text.includes(',')) {
                            formatted = formatted.replace('.', ',');
                        }

                        el.innerText = text.replace(/[\d.,]+/, formatted);
                    }
                });
            }

            // Ejecutar varias veces porque Woo actualiza dinámicamente
            fixPrices();
            setTimeout(fixPrices, 500);
            setTimeout(fixPrices, 1500);
            setInterval(fixPrices, 3000);

        });
        </script>
        <?php
    }
});

/* ===============================
   2️⃣ Catálogo: 3 decimales, Carrito/Checkout: 2 decimales (PHP)
   =============================== */
add_filter('woocommerce_get_price_decimals', function ($decimals) {
    if (is_cart() || is_checkout()) {
        return 2;
    }
    return 3;
}, 999);

add_filter('woocommerce_calculated_total', function ($total) {
    if (is_cart() || is_checkout()) {
        return round($total, 2);
    }
    return $total;
}, 999);

add_filter('wc_price', function ($return, $price, $args, $unformatted_price) {

    if (is_cart() || is_checkout()) {
        $formatted = number_format($unformatted_price, 2, wc_get_price_decimal_separator(), wc_get_price_thousand_separator());
    } else {
        $formatted = number_format($unformatted_price, 3, wc_get_price_decimal_separator(), wc_get_price_thousand_separator());
    }

    return preg_replace('/[\d.,]+/', $formatted, $return, 1);

}, 999, 4);

/* ===============================
   3️⃣ Factura / Pedido recibido / Emails
   =============================== */

// Totales del pedido
add_filter('woocommerce_get_formatted_order_total', function($formatted_total, $order) {

    $total = $order->get_total();

    $formatted = number_format(
        (float) $total,
        2,
        wc_get_price_decimal_separator(),
        wc_get_price_thousand_separator()
    );

    return $formatted . ' ' . get_woocommerce_currency_symbol();
}, 999, 2);

// Líneas de productos
add_filter('woocommerce_order_formatted_line_subtotal', function($subtotal, $item, $order) {

    $total = $item->get_total();

    $formatted = number_format(
        (float) $total,
        2,
        wc_get_price_decimal_separator(),
        wc_get_price_thousand_separator()
    );

    return $formatted . ' ' . get_woocommerce_currency_symbol();

}, 999, 3);

// Impuestos
add_filter('woocommerce_order_get_tax_totals', function($tax_totals, $order) {

    foreach ($tax_totals as $key => $tax) {

        $amount = $tax->amount;

        $formatted = number_format(
            (float) $amount,
            2,
            wc_get_price_decimal_separator(),
            wc_get_price_thousand_separator()
        );

        $tax->formatted_amount = $formatted . ' ' . get_woocommerce_currency_symbol();
    }

    return $tax_totals;

}, 999, 2);
