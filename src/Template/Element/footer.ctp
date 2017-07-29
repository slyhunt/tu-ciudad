 <?= $this->Html->css('footer-distributed-with-contact-form.css') ?> 
    <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Paseo<span>Ciudad</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Blog</a>
                    ·
                    <a href="#">Pricing</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Faq</a>
                    ·
                    <a href="#">Contact</a>
                </p>

                <p class="footer-company-name">Paseo Ciudad &copy; 2017</p>

                <div class="footer-icons">
                    <p class="follow-fb">Síguenos en <j class="fb-color">Facebook</j></p>
                    <a href="#"><i class="fa fa-facebook"></i></a>

                </div>

            </div>

            <div class="footer-right">

                <p>Contáctanos</p>

                <form action="#" method="post">

                    <input type="text" name="email" placeholder="Email" required />
                    <input type="text" name="phone" placeholder="Telefono" required />
                    <textarea name="message" placeholder="Mensaje"></textarea>
                    <button>Enviar</button>

                </form>

            </div>

        </footer>

        <script>
            jQuery(function ($) {
                var $inputs = $('input[name=email],input[name=phone]');
                $inputs.on('input', function () {
                    // Set the required property of the other input to false if this input is not empty.
                    $inputs.not(this).prop('required', !$(this).val().length);
                });
            });
        </script>