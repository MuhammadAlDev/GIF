<?php require APPROOT . '/views/inc/header.php'; ?>

    <div id="builder-content">
        <!-- Builder.io HTML will be injected here -->
        <p>Loading content...</p>
    </div>

    <script>
        // Export minimal Builder configuration to the client
        window.BUILDER_API_KEY = '<?php echo defined("BUILDER_API_KEY") ? BUILDER_API_KEY : ""; ?>';
        window.BUILDER_MODEL = '<?php echo defined("BUILDER_MODEL") ? BUILDER_MODEL : "page"; ?>';
        // Use the current request URI so Builder can match pages by URL
        window.BUILDER_PAGE_URL = '<?php echo isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "/"; ?>';
    </script>

<?php require APPROOT . '/views/inc/footer.php'; ?>
