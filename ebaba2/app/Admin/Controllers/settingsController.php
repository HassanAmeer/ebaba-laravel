<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\settings;

class settingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'settings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new settings());

        $grid->column('id', __('Id'));
        $grid->column('websiteName', __('WebsiteName'));
        $grid->column('WebsiteLogo', __('WebsiteLogo'));
        $grid->column('webisteMiniLogo', __('WebisteMiniLogo'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('show whatsapp', __('Show whatsapp'));
        $grid->column('whatsappNumber', __('WhatsappNumber'));
        $grid->column('showFacebook', __('ShowFacebook'));
        $grid->column('facebookLink', __('FacebookLink'));
        $grid->column('showInstagram', __('ShowInstagram'));
        $grid->column('instagramLink', __('InstagramLink'));
        $grid->column('showBannerImagesOnlyInHead', __('ShowBannerImagesOnlyInHead'));
        $grid->column('showPrivacyPolicy', __('ShowPrivacyPolicy'));
        $grid->column('showRefundPolicy', __('ShowRefundPolicy'));
        $grid->column('showReturndPolicy', __('ShowReturndPolicy'));
        $grid->column('showTermsCondition', __('ShowTermsCondition'));
        $grid->column('showPromotionBanner', __('ShowPromotionBanner'));
        $grid->column('showRequestItemsSection', __('ShowRequestItemsSection'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(settings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('websiteName', __('WebsiteName'));
        $show->field('WebsiteLogo', __('WebsiteLogo'));
        $show->field('webisteMiniLogo', __('WebisteMiniLogo'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('show whatsapp', __('Show whatsapp'));
        $show->field('whatsappNumber', __('WhatsappNumber'));
        $show->field('showFacebook', __('ShowFacebook'));
        $show->field('facebookLink', __('FacebookLink'));
        $show->field('showInstagram', __('ShowInstagram'));
        $show->field('instagramLink', __('InstagramLink'));
        $show->field('showBannerImagesOnlyInHead', __('ShowBannerImagesOnlyInHead'));
        $show->field('showPrivacyPolicy', __('ShowPrivacyPolicy'));
        $show->field('showRefundPolicy', __('ShowRefundPolicy'));
        $show->field('showReturndPolicy', __('ShowReturndPolicy'));
        $show->field('showTermsCondition', __('ShowTermsCondition'));
        $show->field('showPromotionBanner', __('ShowPromotionBanner'));
        $show->field('showRequestItemsSection', __('ShowRequestItemsSection'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new settings());

        $form->text('websiteName', __('WebsiteName'));
        $form->text('WebsiteLogo', __('WebsiteLogo'));
        $form->text('webisteMiniLogo', __('WebisteMiniLogo'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->switch('show whatsapp', __('Show whatsapp'));
        $form->text('whatsappNumber', __('WhatsappNumber'));
        $form->switch('showFacebook', __('ShowFacebook'));
        $form->text('facebookLink', __('FacebookLink'));
        $form->switch('showInstagram', __('ShowInstagram'));
        $form->text('instagramLink', __('InstagramLink'));
        $form->switch('showBannerImagesOnlyInHead', __('ShowBannerImagesOnlyInHead'));
        $form->switch('showPrivacyPolicy', __('ShowPrivacyPolicy'));
        $form->switch('showRefundPolicy', __('ShowRefundPolicy'));
        $form->switch('showReturndPolicy', __('ShowReturndPolicy'));
        $form->switch('showTermsCondition', __('ShowTermsCondition'));
        $form->switch('showPromotionBanner', __('ShowPromotionBanner'));
        $form->switch('showRequestItemsSection', __('ShowRequestItemsSection'));

        return $form;
    }
}
