<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('Laravel Starter Boilerplate');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{!! $crumb["label"] !!}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{!! $crumb["label"] !!}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            /**
             * CSS
             **/
            $theme->asset()->usePath()->add('bootstrap','bootstrap/css/bootstrap.min.css');
            $theme->asset()
                  ->add('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css');
            $theme->asset()
                   ->add('iconsicons','https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css');
            $theme->asset()->usePath()->add('admin-lte','css/AdminLTE.min.css');
            $theme->asset()->usePath()->add('admin-lte-skin','css/skins/_all-skins.min.css');
            $theme->asset()->usePath()->add('iCheck','plugins/iCheck/square/blue.css');
            $theme->asset()->usePath()->add('morris-chart','plugins/morris/morris.css');
            $theme->asset()->usePath()->add('jvector-map','plugins/jvectormap/jquery-jvectormap-1.2.2.css');
            $theme->asset()->usePath()->add('datepicker','plugins/datepicker/datepicker3.css');
            $theme->asset()->usePath()->add('daterangepicker','plugins/daterangepicker/daterangepicker.css');
            $theme->asset()
                  ->usePath()
                  ->add('bootstrap3-wysihtml5','plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');

            /**
             * Javascript
             **/
            $dependencies = array();
            $theme->asset()->container('footer')->usePath()->add('jquery','plugins/jQuery/jquery-2.2.3.min.js');
            $theme->asset()->container('footer')->add('jquery-ui','https://code.jquery.com/ui/1.11.4/jquery-ui.min.js');
            $theme->asset()->container('footer')->writeScript('inline-script', '
                $.widget.bridge(\'uibutton\', $.ui.button);
            ', $dependencies);
            $theme->asset()->container('footer')->usePath()->add('bootstrap-js','bootstrap/js/bootstrap.min.js');
            $theme->asset()->container('footer')
                  ->add('morris-chart','https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('morris-chart-local','plugins/morris/morris.min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('sparkline','plugins/sparkline/jquery.sparkline.min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('jvectormap-scripts','plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('jvectormap-en','plugins/jvectormap/jquery-jvectormap-world-mill-en.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('jquery-knob-chart','plugins/knob/jquery.knob.js');
            $theme->asset()->container('footer')
                  ->add('morris-chart','https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('daterangepicker','plugins/daterangepicker/daterangepicker.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('datepicker','plugins/datepicker/bootstrap-datepicker.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('bootstrap3-wysihtml5','plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('slimscroll','plugins/slimScroll/jquery.slimscroll.min.js');
            $theme->asset()->container('footer')
                  ->usePath()
                  ->add('fastclick','plugins/fastclick/fastclick.js');
            $theme->asset()->container('footer')->usePath()->add('adminLTEjs','js/app.min.js');

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }

        )

    )

);