<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the form components
      Form::component('Text', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
      Form::component('TextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
      Form::component('Submit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
      Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
