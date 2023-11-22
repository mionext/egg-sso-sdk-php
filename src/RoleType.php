<?php

namespace Egg\Foundation\Sso;

class RoleType
{
    // 23.11.22
    // role const in 
    // [{"name":"超级管理员","uuid":"super"},{"name":"商务","uuid":"business"},{"name":"财务","uuid":"finance"},{"name":"运营","uuid":"op"},{"name":"版权","uuid":"copyright"},{"name":"编剧","uuid":"writer"},{"name":"合作商","uuid":"partners"},{"name":"剧本渠道","uuid":"script"},{"name":"拍摄渠道","uuid":"shoot"},{"name":"编导","uuid":"director"},{"name":"配管","uuid":"cop"},{"name":"优化师","uuid":"optimizer"},{"name":"VIP","uuid":"vip"},{"name":"客服","uuid":"customer"},{"name":"精修","uuid":"editor"},{"name":"内容运营助理","uuid":"coa"},{"name":"商务总监","uuid":"business-director"},{"name":"技术","uuid":"developer"},{"name":"素材师","uuid":"clipper"},{"name":"高管","uuid":"senior-management"},{"name":"投放总监","uuid":"delivery-director"},{"name":"人力","uuid":"hr"},{"name":"广告市场","uuid":"ad"},{"name":"老板","uuid":"boss"},{"name":"商务小说","uuid":"business-book"},{"name":"投放商务","uuid":"delivery-business"},{"name":"产品","uuid":"pm"},{"name":"私域","uuid":"kol"},{"name":"投放组长","uuid":"op-group"},{"name":"数据分析","uuid":"data"},{"name":"KOC","uuid":"koc"}]

    const                                           // @NOTE: 角色标识

        RoleSuper = 'super',                        // 超管
        RoleFinance = 'finance',                    // 财务
        RoleOp = 'op',                              // 运营
        RoleDeliveryDirector = 'delivery-director', // 投放总监
        RoleBusinessDirector = 'business-director', // 商务总监
        RoleBusinessBook = 'business-book',         // 商务 - 小说
        RoleBusiness = 'business',                  // 商务
        RoleCopyright = 'copyright',                // 版权
        RoleSeniorManagement = 'senior-management', // 高管
        RoleOptimizer = 'optimizer',                // 优化师
        RoleBoss = 'boss',                          // 老板
        RoleOPGroup = 'op-group',                   // 投放组长
        RoleClipper = 'clipper',                    // 素材师
        RoleDeveloper = 'developer',                // 开发 / 技术
        RoleDeliveryBusiness = 'delivery-business', // 投放商务
        RoleHR = 'hr',                              // 人力
        RoleAD = 'ad',                              // 广告市场
        RolePM = 'pm',                              // 产品
        RoleKOL = 'kol',                            // 私域
        RoleKOC = 'koc',                            // KOC
        RoleData = 'data',                          // 数据分析
        RoleCOA = 'coa',                            // 内容运营助理
        RoleEditor = 'editor',                      // 精修
        RolePartner = 'partners',                   // 合作商
        RoleScript = 'script',                      // 剧本渠道
        RoleShoot = 'shoot',                        // 拍摄渠道
        RoleDirector = 'director',                  // 编导
        RoleCOP = 'cop',                            // 配管
        RoleVip = 'vip',                            // VIP
        RoleWriter = 'writer',                      // 编剧
        RoleCustomer = 'customer',                  // 客服

        _ = -1;

    private function __construct()
    {
    }
}
