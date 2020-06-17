<?php


namespace jubull\alibaba\functions\order;

use jubull\alibaba\core\BaseClient;
use jubull\alibaba\entity\CreateRefundParams;
use jubull\alibaba\entity\QueryOrderRefundOperationListParams;
use jubull\alibaba\entity\QueryOrderRefundParams;
use jubull\alibaba\entity\RefundReasonListParams;
use jubull\alibaba\entity\ReturnGoodsParams;
use jubull\alibaba\entity\UploadRefundVoucherParams;

/**
 * 退货模块
 * @package jubull\alibaba\functions\order
 */
class Refund extends BaseClient
{

    /**
     * 创建退款退货申请
     * @param CreateRefundParams $createRefundParams
     * @return $this
     */
    public function createRefund(CreateRefundParams $createRefundParams)
    {
        $this->app->params = $createRefundParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.createRefund-1';
        return $this;
    }

    /**
     * 查询退款退货原因（用于创建退款退货）
     * @param RefundReasonListParams $refundReasonListParams
     * @return $this
     */
    public function getRefundReasonList(RefundReasonListParams $refundReasonListParams)
    {
        $this->app->params = $refundReasonListParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.getRefundReasonList-1';
        return $this;
    }

    /**
     * 上传退款退货凭证
     * @param UploadRefundVoucherParams $uploadRefundVoucherParams
     * @return $this
     */
    public function uploadRefundVoucher(UploadRefundVoucherParams $uploadRefundVoucherParams)
    {
        $this->app->params = $uploadRefundVoucherParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.uploadRefundVoucher-1';
        return $this;
    }

    /**
     * 查询退款单详情-根据退款单ID
     *
     * @param QueryOrderRefundParams $queryOrderRefundParams
     * @return $this
     */
    public function queryOrderRefund(QueryOrderRefundParams $queryOrderRefundParams)
    {
        $this->app->params = $queryOrderRefundParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.OpQueryOrderRefund-1';
        return $this;
    }


    /**
     * 买家提交退款货信息
     *
     * @param ReturnGoodsParams $returnGoodsParams
     * @return $this
     */
    public function returnGoods(ReturnGoodsParams $returnGoodsParams)
    {
        $this->app->params = $returnGoodsParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.returnGoods-1';
        return $this;
    }


    /**
     * 退款单操作记录列表-买卖双方退款操作记录
     * @param QueryOrderRefundOperationListParams $queryOrderRefundOperationListParams
     * @return $this
     */
    public function queryOrderRefundOperationList(QueryOrderRefundOperationListParams $queryOrderRefundOperationListParams)
    {
        $this->app->params = $queryOrderRefundOperationListParams->build();
        $this->url_info    = 'com.alibaba.trade:alibaba.trade.refund.OpQueryOrderRefundOperationList-1';
        return $this;
    }

}