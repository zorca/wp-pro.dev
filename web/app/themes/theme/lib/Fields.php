<?php
/**
 * @package     wp-pro.dev
 * @copyright   Copyright (C) 2017 Zorca. All rights reserved.
 * @license     MIT License; see LICENSE file for details.
 */

namespace Oxboot\Theme;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Fields
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', function () {
            Container::make('post_meta', __('QA Content', 'theme'))
                ->show_on_post_type(['post', 'qa'])
                ->add_fields([
                    Field::make('rich_text', 'wppro_question', __('Question', 'theme')),
                    Field::make('rich_text', 'wppro_answer', __('Answer', 'theme')),
                ]);
        });
    }
}
