<?php

namespace jubull\alibaba\functions\product;

use jubull\alibaba\core\BaseClient;
use jubull\alibaba\entity\CpsMediaProductInfoParams;
use jubull\alibaba\entity\GetCategoryByIdParams;
use jubull\alibaba\entity\ListCybUserGroupParams;
use jubull\alibaba\entity\ListCybUserGroupFeedParams;
use jubull\alibaba\entity\ListOverPricedOfferParams;
use jubull\alibaba\entity\ProductFollowParams;
use jubull\alibaba\entity\ProductUnfollowParams;
use jubull\alibaba\entity\QueryOfferDetailActivityParams;
use jubull\alibaba\entity\CrossProductInfoParam;

/**
 * 产品模块
 * @package jubull\alibaba\functions\product
 */
class Product extends BaseClient
{
    /**
     * 关注商品
     * @param ProductFollowParams $productFollowParams
     * @return $this
     */
    public function productFollow(ProductFollowParams $productFollowParams)
    {
        $this->app->params = $productFollowParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.product.follow-1';
        return $this;
    }

    /**
     * 解除关注商品
     * @param ProductUnfollowParams $productUnfollowParams
     * @return $this
     */
    public function productUnfollow(ProductUnfollowParams $productUnfollowParams)
    {
        $this->app->params = $productUnfollowParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.product.unfollow.crossborder-1';
        return $this;
    }

    /**
     * 获取商品详情
     * @param CpsMediaProductInfoParams $cpsMediaProductInfoParams
     * @return $this
     */
    public function cpsMediaProductInfo(CpsMediaProductInfoParams $cpsMediaProductInfoParams)
    {
        $this->app->params = $cpsMediaProductInfoParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.cpsMedia.productInfo-1';
        return $this;
    }

    /**
     * 获取营销活动价格等活动信息
     * @param QueryOfferDetailActivityParams $queryOfferDetailActivityParams
     * @return $this
     */
    public function queryOfferDetailActivity(QueryOfferDetailActivityParams $queryOfferDetailActivityParams)
    {
        $this->app->params = $queryOfferDetailActivityParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.queryOfferDetailActivity-1';
        return $this;
    }

    /**
     * 商品列表搜索接口
     * @param ListOverPricedOfferParams $listOverPricedOfferParams
     * @return $this
     */
    public function listOverPricedOffer(ListOverPricedOfferParams $listOverPricedOfferParams)
    {
        $this->app->params = $listOverPricedOfferParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.searchCybOffers-1';
        return $this;
    }

    /**
     * 读取已选商品列表
     * @param ListCybUserGroupFeedParams $listCybUserGroupFeedParams
     * @return $this
     */
    public function listCybUserGroupFeed(ListCybUserGroupFeedParams $listCybUserGroupFeedParams)
    {
        $this->app->params = $listCybUserGroupFeedParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.listCybUserGroupFeed-1';
        return $this;
    }

    /**
     * 获取我的选品库列表
     * @param ListCybUserGroupParams $listCybUserGroupFeed
     * @return Product
     */
    public function listCybUserGroup(ListCybUserGroupParams $listCybUserGroupFeed)
    {
        $this->app->params = $listCybUserGroupFeed->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.listCybUserGroup-1';
        return $this;
    }

    /**
     * 根据类目Id查询类目
     *
     * @param GetCategoryByIdParams $getCategoryByIdParams
     * @return $this
     */
    public function getCategoryById(GetCategoryByIdParams $getCategoryByIdParams)
    {
        $this->app->params = $getCategoryByIdParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.category.get-1';
        return $this;
    }


    /**
     * 跨境场景获取商品详情
     *
     * @param CrossProductInfoParam $crossProductInfoParam
     * @return void
     * @Author HaierSpi haierspi@qq.com
     * @DateTime 2020-04-13
     */
    public function getCrossProductInfo( CrossProductInfoParam $crossProductInfoParam)
    {

        $this->app->params = $crossProductInfoParam->build();
        $this->url_info    = 'com.alibaba.product:alibaba.cross.productInfo-1';
        return $this;
    }

}