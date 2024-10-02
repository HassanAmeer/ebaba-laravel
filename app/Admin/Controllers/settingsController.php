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

        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");

        $grid = new Grid(new settings());

        $grid->column('id', __('Id'));
        $grid->column('websiteName', __('WebsiteName'));
        $grid->column('websiteLogo', __('WebsiteLogo'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('webisteMiniLogo', __('WebisteMiniLogo'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('showWhatsapp', __('Show whatsapp'))->switch();
        $grid->column('whatsappNumber', __('WhatsappNumber'));
        $grid->column('showFacebook', __('ShowFacebook'))->switch();
        $grid->column('facebookLink', __('FacebookLink'));
        $grid->column('showInstagram', __('ShowInstagram'))->switch();
        $grid->column('instagramLink', __('InstagramLink'));
        $grid->column('showBannerImagesOnlyInHead', __('ShowBannerImagesOnlyInHead'))->switch();
        $grid->column('showPrivacyPolicy', __('ShowPrivacyPolicy'))->switch();
        $grid->column('showRefundPolicy', __('ShowRefundPolicy'))->switch();
        $grid->column('showReturndPolicy', __('ShowReturndPolicy'))->switch();
        $grid->column('showTermsCondition', __('ShowTermsCondition'))->switch();
        $grid->column('showPromotionBanner', __('ShowPromotionBanner'))->switch();
        $grid->column('showRequestItemsSection', __('ShowRequestItemsSection'))->switch();

        $grid->column('showToastMessages', __('showToastMessages'))->switch();
        $grid->column('showBanner2InHeader', __('showBanner2InHeader'))->switch();
        $grid->column('showOfferInFooter', __('showOfferInFooter'))->switch();
        $grid->column('showItemInFooter', __('showItemInFooter'))->switch();
        $grid->column('PromotionBannerDesign',__('PromotionBannerDesign'));

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

        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");

        $show = new Show(settings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('websiteName', __('WebsiteName'));
        $show->field('websiteLogo', __('WebsiteLogo'))->image($baseUrl.'/uploads/',75,75);
        $show->field('webisteMiniLogo', __('WebisteMiniLogo'))->image($baseUrl.'/uploads/',75,75);
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->switch('showWhatsapp', __('Show whatsapp'));
        $show->field('whatsappNumber', __('WhatsappNumber'));
        $show->switch('showFacebook', __('ShowFacebook'));
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

        $show->field('showToastMessages', __('showToastMessages'));
        $show->field('showBanner2InHeader', __('showBanner2InHeader'));
        $show->field('showOfferInFooter', __('showOfferInFooter'));
        $show->field('showItemInFooter', __('showItemInFooter'));
        $show->field('PromotionBannerDesign',__('PromotionBannerDesign'));

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
        $form->image('websiteLogo', __('WebsiteLogo'));
        $form->image('webisteMiniLogo', __('WebisteMiniLogo'));
        $form->email('email', __('Email'));
        $form->phonenumber('phone', __('Phone'));
        $form->switch('showWhatsapp', __('Show whatsapp'));
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

        $form->switch('showToastMessages', __('showToastMessages'));
        $form->switch('showBanner2InHeader', __('showBanner2InHeader'));
        $form->switch('showOfferInFooter', __('showOfferInFooter'));
        $form->switch('showItemInFooter', __('showItemInFooter'));
        $form->ckeditor('PromotionBannerDesign')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);

        return $form;
    }
}
