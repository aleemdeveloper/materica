
    <div id="footer" class="bg text-center p-3">
        <h4>
            Copyright &copy Materica
        </h4>
        <p>Developed by Splendid Software Solutions</p>
    </div>
</div>
    
<!--Footer  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" ></script>
<script>
    $(document).ready(function() {
        $(".gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });
    });
</script>
</body>
</html>