
        <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
        <?php wp_footer(); ?>

        <script>
            $(document).ready(function(){
                <?php if(get_option("ver_boton_compra_data") == 'yes'): ?>
                    $(".bot-n-tickets").show();
                <?php else: ?>
                    $(".bot-n-tickets").hide();
                <?php endif; ?>
            });
        </script>

    </body>
    
</html>