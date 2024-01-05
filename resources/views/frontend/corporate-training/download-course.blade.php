
<div class="widget widget_text">
    <div class="textwidget">
        <h4 class="widget_title">Complimentary Download</h4>
        <p>Thank you for your interest in Unitelearning's Selling training solutions.
             To download this brochure, please complete the form on the right.If you
              are having any issues completing the form, please email Linethemes at
               the following and we can send you the files - contact <a href="mailto:info@unitelearning.com" class="scheme2">info@unitelearning.com </a></p>
        <form class="widget-form">
            <p>
                <input type="text" name="EMAIL" placeholder="Your email address">
            </p>
            <p>
                <input type="submit" value="Download" onclick="download()">
            </p>
        </form>
    </div>
</div><!-- /.widget_text -->


<!-- Include your JavaScript script -->
<script>
    function download() {
        // Redirect to the Laravel route for PDF download
        window.location.href = "{{route('download-pdf')}}";
    }
</script>
