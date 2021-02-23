<?php
return array(
    /**
     * Do not change this configs unless instructed
     */
    'pdf' => array(
        'enabled' => true,
        'binary'  => env('PDF_GENERATOR_BINARY_URI'),
        'timeout' => false,
        'options' => [
            'orientation' => 'landscape',
        ],
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => env('PDF_GENERATOR_BINARY_URI'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),

);
