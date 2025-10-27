<?php
class BuilderController extends Controller {
    public function __construct() {
        // any initialization if needed
    }

    // Render a page that will be filled by Builder.io HTML API
    public function index() {
        $data = [
            'title' => 'Builder Page'
        ];

        $this->view('pages/builder', $data);
    }
}
