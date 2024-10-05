<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\ModelsPagesDesign;

class PagesDesignController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ModelsPagesDesign';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ModelsPagesDesign());

        $grid->column('id', __('Id'));
        // $grid->column('privacyPolicy', __('PrivacyPolicy'));
        // $grid->column('returnPolicy', __('ReturnPolicy'));
        // $grid->column('refundPolicy', __('RefundPolicy'));
        // $grid->column('termsCondition', __('TermsCondition'));
        $grid->column('privacyPolicy', __('privacy Policy Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:30rem;');
        $grid->column('shippingPolicy', __('shipping Policy Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:30rem;');
        $grid->column('returnRefundPolicy', __('Return Refund Policy Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:30rem;');
        $grid->column('termsCondition', __('termsCondition Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:30rem;');
        $grid->column('contactUs', __('contact Us Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:30rem;');
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ModelsPagesDesign::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('privacyPolicy', __('Privacy Policy'));
        $show->field('shippingPolicy', __('Shipping Policy'));
        $show->field('returnRefundPolicy', __('Return Refund Policy'));
        $show->field('termsCondition', __('Terms Condition'));
        $show->field('contactUs', __('contact Us Design'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ModelsPagesDesign());

        // $form->textarea('privacyPolicy', __('PrivacyPolicy'));
        // $form->textarea('returnPolicy', __('ReturnPolicy'));
        // $form->textarea('refundPolicy', __('RefundPolicy'));
        // $form->textarea('termsCondition', __('TermsCondition'));

        $form->ckeditor('privacyPolicy')->options(['lang' => 'en', 'height' => 300, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('shippingPolicy')->options(['lang' => 'en', 'height' => 300, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('returnRefundPolicy')->options(['lang' => 'en', 'height' => 300, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('termsCondition')->options(['lang' => 'en', 'height' => 300, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->ckeditor('contactUs')->options(['lang' => 'en', 'height' => 300, 'allowedContent' => true, 
        'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);

        return $form;
    }
}
