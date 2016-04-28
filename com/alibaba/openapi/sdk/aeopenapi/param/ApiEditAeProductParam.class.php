<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAeProductSKUs.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAeProductPropertys.class.php');

class ApiEditAeProductParam {

        
        /**
    * @return 编辑产品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置编辑产品ID     
     * @param String $productId     
     * 参数示例：<pre>1239273</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return Detail详情。以下内容会被过滤，但不影响产品提交:(1)含有script\textarea\style\iframe\frame\input\pre\button均被过滤.(2)a标签href属性只允许是aliexpress.com域名连接,否则被过滤.(3)img标签src只允许alibaba.com或者aliimg.com域名链接.(4)任意具有style属性的html标签，其style受检查，只允许一般简单的样式.不允许的内容将被过滤.(5)如果发现html内容标签缺失，会自动补全标签.
    */
        public function getDetail() {
        $tempResult = $this->sdkStdResult["detail"];
        return $tempResult;
    }
    
    /**
     * 设置Detail详情。以下内容会被过滤，但不影响产品提交:(1)含有script\textarea\style\iframe\frame\input\pre\button均被过滤.(2)a标签href属性只允许是aliexpress.com域名连接,否则被过滤.(3)img标签src只允许alibaba.com或者aliimg.com域名链接.(4)任意具有style属性的html标签，其style受检查，只允许一般简单的样式.不允许的内容将被过滤.(5)如果发现html内容标签缺失，会自动补全标签.     
     * @param String $detail     
     * 参数示例：<pre><ul> <li> <h2 style="padding: 5px;"> product details </h2> </li></ul><div> <div> <p> <img src="http: //img01.cp.aliimg.com/bao/uploaded/i1/TB1h8QnHpXXXXbgXFXXXXXXXXXX_!!0-item_pic.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> </div> <div> <p> <img src="http: //img01.cp.aliimg.com/bao/uploaded/i1/1829426776/TB2VKM4cXXXXXaFXXXXXXXXXXXX_!!1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> </div> <div> <p> <img src="http: //img01.cp.aliimg.com/bao/uploaded/i3/1829426776/TB21v3GcXXXXXaeXpXXXXXXXXXX_!!1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> </div> <div> <p> <img src="http: //img01.cp.aliimg.com/bao/uploaded/i3/1829426776/TB2tkMGcXXXXXaFXpXXXXXXXXXX_!!1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> </div> <p> <img src="http: //img01.cp.aliimg.com/kissy/1.0.0/build/imglazyload/spaceball.gif" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> <div> <p> <img align="absmiddle" src="http: //img01.cp.aliimg.com/imgextra/i2/1829426776/TB2PXfDcpXXXXXvXpXXXXXXXXXX-1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> <p> <img align="absmiddle" src="http: //img01.cp.aliimg.com/imgextra/i4/1829426776/TB27Y.QcXXXXXXtXXXXXXXXXXXX_!!1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> <p> <img align="absmiddle" src="http: //img01.cp.aliimg.com/imgextra/i2/1829426776/TB2L5cMcXXXXXbFXXXXXXXXXXXX_!!1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> <p> <img align="absmiddle" src="http: //img01.cp.aliimg.com/imgextra/i2/1829426776/TB2P_7LcXXXXXciXXXXXXXXXXXX_!!1829426776.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> </div></div><div style="margin: 10px;padding-top: 10px;width: 580px;"> <ul> <li> <h2 style="padding: 5px;"> size information </h2> </li> </ul> <p style="line-height: 16px;"> note : the following information is for reference only . please contact the seller to get the detailed information . </p> <p> <img src="http: //img.alibaba.com/images/cms/upload/seller/product/01size_chart.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> <p> <img src="http: //img.alibaba.com/images/cms/upload/seller/product/02size_chart.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p> <p> <img src="http: //img.alibaba.com/images/cms/upload/seller/product/03size_chart.jpg" alt="aeProduct.getSubject()" title="aeProduct.getSubject()" /> </p></div><p>   </p><p>   </p></pre>     
     * 此参数必填     */
    public function setDetail( $detail) {
        $this->sdkStdResult["detail"] = $detail;
    }
    
        
        /**
    * @return 列表类型，以json格式来表达。参看aeopAeProductSKUs数据结构。特别提示：新增SKU实际可售库存属性ipmSkuStock，该属性值的合理取值范围为0~999999，如该商品有SKU时，请确保至少有一个SKU是有货状态，也就是ipmSkuStock取值是1~999999，在整个商品纬度库存值的取值范围是1~999999。
    */
        public function getAeopAeProductSKUs() {
        $tempResult = $this->sdkStdResult["aeopAeProductSKUs"];
        return $tempResult;
    }
    
    /**
     * 设置列表类型，以json格式来表达。参看aeopAeProductSKUs数据结构。特别提示：新增SKU实际可售库存属性ipmSkuStock，该属性值的合理取值范围为0~999999，如该商品有SKU时，请确保至少有一个SKU是有货状态，也就是ipmSkuStock取值是1~999999，在整个商品纬度库存值的取值范围是1~999999。     
     * @param array include @see AeopAeProductSKUs[] $aeopAeProductSKUs     
     * 参数示例：<pre>[ { "ipmSkuStock": 10, "skuPrice": "11.00", "aeopSKUProperty": [ { "propertyValueId": 193, "skuImage": "http://g02.a.alicdn.com/kf/HTB1NKEUIVXXXXcOXXXXq6xXFXXXu.jpg", "propertyValueDefinitionName": "balck", "skuPropertyId": 200000182 }, { "propertyValueId": 201336100, "skuPropertyId": 200007763 } ], "skuCode": "11234" } ]</pre>     
     * 此参数必填     */
    public function setAeopAeProductSKUs(AeopAeProductSKUs $aeopAeProductSKUs) {
        $this->sdkStdResult["aeopAeProductSKUs"] = $aeopAeProductSKUs;
    }
    
        
        /**
    * @return 备货期。取值范围:1-60;单位:天。
    */
        public function getDeliveryTime() {
        $tempResult = $this->sdkStdResult["deliveryTime"];
        return $tempResult;
    }
    
    /**
     * 设置备货期。取值范围:1-60;单位:天。     
     * @param Integer $deliveryTime     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setDeliveryTime( $deliveryTime) {
        $this->sdkStdResult["deliveryTime"] = $deliveryTime;
    }
    
        
        /**
    * @return 商品所属类目ID。必须是叶子类目，通过类目接口获取。
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置商品所属类目ID。必须是叶子类目，通过类目接口获取。     
     * @param Integer $categoryId     
     * 参数示例：<pre>200002101</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 商品标题  长度在1-128之间英文。
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置商品标题  长度在1-128之间英文。     
     * @param String $subject     
     * 参数示例：<pre>knew odd</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 服务模板ID。如果不填，则为新手模板ID。
    */
        public function getPromiseTemplateId() {
        $tempResult = $this->sdkStdResult["promiseTemplateId"];
        return $tempResult;
    }
    
    /**
     * 设置服务模板ID。如果不填，则为新手模板ID。     
     * @param Long $promiseTemplateId     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPromiseTemplateId( $promiseTemplateId) {
        $this->sdkStdResult["promiseTemplateId"] = $promiseTemplateId;
    }
    
        
        /**
    * @return 商品一口价。取值范围:0-100000,保留两位小数;单位:美元。如:200.07，表示:200美元7分。需要在正确的价格区间内。
    */
        public function getProductPrice() {
        $tempResult = $this->sdkStdResult["productPrice"];
        return $tempResult;
    }
    
    /**
     * 设置商品一口价。取值范围:0-100000,保留两位小数;单位:美元。如:200.07，表示:200美元7分。需要在正确的价格区间内。     
     * @param String $productPrice     
     * 参数示例：<pre>10.11</pre>     
     * 此参数必填     */
    public function setProductPrice( $productPrice) {
        $this->sdkStdResult["productPrice"] = $productPrice;
    }
    
        
        /**
    * @return 运费模版ID。通过运费接口listFreightTemplate获取。
    */
        public function getFreightTemplateId() {
        $tempResult = $this->sdkStdResult["freightTemplateId"];
        return $tempResult;
    }
    
    /**
     * 设置运费模版ID。通过运费接口listFreightTemplate获取。     
     * @param Integer $freightTemplateId     
     * 参数示例：<pre>703476858</pre>     
     * 此参数必填     */
    public function setFreightTemplateId( $freightTemplateId) {
        $this->sdkStdResult["freightTemplateId"] = $freightTemplateId;
    }
    
        
        /**
    * @return 图片URL.静态单图主图个数为1,动态多图主图个数为2-6.可从图片接口uploadTempImage上传，也可以从图片银行引入.  多个图片url用‘;’分隔符连接。
    */
        public function getImageURLs() {
        $tempResult = $this->sdkStdResult["imageURLs"];
        return $tempResult;
    }
    
    /**
     * 设置图片URL.静态单图主图个数为1,动态多图主图个数为2-6.可从图片接口uploadTempImage上传，也可以从图片银行引入.  多个图片url用‘;’分隔符连接。     
     * @param String $imageURLs     
     * 参数示例：<pre>http://g01.a.alicdn.com/kf/HTB13GKLJXXXXXbYaXXXq6xXFXXXi.jpg;http://g02.a.alicdn.com/kf/HTB1DkaWJXXXXXb6XFXXq6xXFXXXp.jpg;http://g02.a.alicdn.com/kf/HTB1pMCQJXXXXXcvXVXXq6xXFXXXm.jpg;http://g03.a.alicdn.com/kf/HTB1QhORJXXXXXbiXVXXq6xXFXXXx.jpg;http://g02.a.alicdn.com/kf/HTB1q1aLJXXXXXcfaXXXq6xXFXXXv.jpg</pre>     
     * 此参数必填     */
    public function setImageURLs( $imageURLs) {
        $this->sdkStdResult["imageURLs"] = $imageURLs;
    }
    
        
        /**
    * @return 商品单位 (存储单位编号) 
100000000:袋 (bag/bags)
100000001:桶 (barrel/barrels)
100000002:蒲式耳 (bushel/bushels)
100078580:箱 (carton)
100078581:厘米 (centimeter)
100000003:立方米 (cubic meter)
100000004:打 (dozen)
100078584:英尺 (feet)
100000005:加仑 (gallon)
100000006:克 (gram)
100078587:英寸 (inch)
100000007:千克 (kilogram)
100078589:千升 (kiloliter)
100000008:千米 (kilometer)
100078559:升 (liter/liters)
100000009:英吨 (long ton)
100000010:米 (meter)
100000011:公吨 (metric ton)
100078560:毫克 (milligram)
100078596:毫升 (milliliter)
100078597:毫米 (millimeter)
100000012:盎司 (ounce)
100000014:包 (pack/packs)
100000013:双 (pair)
100000015:件/个 (piece/pieces)
100000016:磅 (pound)
100078603:夸脱 (quart)
100000017:套 (set/sets)
100000018:美吨 (short ton)
100078606:平方英尺 (square feet)
100078607:平方英寸 (square inch)
100000019:平方米 (square meter)
100078609:平方码 (square yard)
100000020:吨 (ton)
100078558:码 (yard/yards)
    */
        public function getProductUnit() {
        $tempResult = $this->sdkStdResult["productUnit"];
        return $tempResult;
    }
    
    /**
     * 设置商品单位 (存储单位编号) 
100000000:袋 (bag/bags)
100000001:桶 (barrel/barrels)
100000002:蒲式耳 (bushel/bushels)
100078580:箱 (carton)
100078581:厘米 (centimeter)
100000003:立方米 (cubic meter)
100000004:打 (dozen)
100078584:英尺 (feet)
100000005:加仑 (gallon)
100000006:克 (gram)
100078587:英寸 (inch)
100000007:千克 (kilogram)
100078589:千升 (kiloliter)
100000008:千米 (kilometer)
100078559:升 (liter/liters)
100000009:英吨 (long ton)
100000010:米 (meter)
100000011:公吨 (metric ton)
100078560:毫克 (milligram)
100078596:毫升 (milliliter)
100078597:毫米 (millimeter)
100000012:盎司 (ounce)
100000014:包 (pack/packs)
100000013:双 (pair)
100000015:件/个 (piece/pieces)
100000016:磅 (pound)
100078603:夸脱 (quart)
100000017:套 (set/sets)
100000018:美吨 (short ton)
100078606:平方英尺 (square feet)
100078607:平方英寸 (square inch)
100000019:平方米 (square meter)
100078609:平方码 (square yard)
100000020:吨 (ton)
100078558:码 (yard/yards)     
     * @param Integer $productUnit     
     * 参数示例：<pre>100000000</pre>     
     * 此参数必填     */
    public function setProductUnit( $productUnit) {
        $this->sdkStdResult["productUnit"] = $productUnit;
    }
    
        
        /**
    * @return 打包销售: true 非打包销售:false
    */
        public function getPackageType() {
        $tempResult = $this->sdkStdResult["packageType"];
        return $tempResult;
    }
    
    /**
     * 设置打包销售: true 非打包销售:false     
     * @param Boolean $packageType     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setPackageType( $packageType) {
        $this->sdkStdResult["packageType"] = $packageType;
    }
    
        
        /**
    * @return 每包件数。  打包销售情况，lotNum>1,非打包销售情况,lotNum=1
    */
        public function getLotNum() {
        $tempResult = $this->sdkStdResult["lotNum"];
        return $tempResult;
    }
    
    /**
     * 设置每包件数。  打包销售情况，lotNum>1,非打包销售情况,lotNum=1     
     * @param Integer $lotNum     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setLotNum( $lotNum) {
        $this->sdkStdResult["lotNum"] = $lotNum;
    }
    
        
        /**
    * @return 商品包装长度。取值范围:1-700,单位:厘米。产品包装尺寸的最大值+2×（第二大值+第三大值）不能超过2700厘米。
    */
        public function getPackageLength() {
        $tempResult = $this->sdkStdResult["packageLength"];
        return $tempResult;
    }
    
    /**
     * 设置商品包装长度。取值范围:1-700,单位:厘米。产品包装尺寸的最大值+2×（第二大值+第三大值）不能超过2700厘米。     
     * @param Integer $packageLength     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPackageLength( $packageLength) {
        $this->sdkStdResult["packageLength"] = $packageLength;
    }
    
        
        /**
    * @return 商品包装宽度。取值范围:1-700,单位:厘米。
    */
        public function getPackageWidth() {
        $tempResult = $this->sdkStdResult["packageWidth"];
        return $tempResult;
    }
    
    /**
     * 设置商品包装宽度。取值范围:1-700,单位:厘米。     
     * @param Integer $packageWidth     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setPackageWidth( $packageWidth) {
        $this->sdkStdResult["packageWidth"] = $packageWidth;
    }
    
        
        /**
    * @return 商品包装高度。取值范围:1-700,单位:厘米。
    */
        public function getPackageHeight() {
        $tempResult = $this->sdkStdResult["packageHeight"];
        return $tempResult;
    }
    
    /**
     * 设置商品包装高度。取值范围:1-700,单位:厘米。     
     * @param Integer $packageHeight     
     * 参数示例：<pre>40</pre>     
     * 此参数必填     */
    public function setPackageHeight( $packageHeight) {
        $this->sdkStdResult["packageHeight"] = $packageHeight;
    }
    
        
        /**
    * @return 商品毛重,取值范围:0.001-500.000,保留三位小数,采用进位制,单位:公斤。
    */
        public function getGrossWeight() {
        $tempResult = $this->sdkStdResult["grossWeight"];
        return $tempResult;
    }
    
    /**
     * 设置商品毛重,取值范围:0.001-500.000,保留三位小数,采用进位制,单位:公斤。     
     * @param String $grossWeight     
     * 参数示例：<pre>50</pre>     
     * 此参数必填     */
    public function setGrossWeight( $grossWeight) {
        $this->sdkStdResult["grossWeight"] = $grossWeight;
    }
    
        
        /**
    * @return 是否自定义计重.true为自定义计重,false反之.
    */
        public function getIsPackSell() {
        $tempResult = $this->sdkStdResult["isPackSell"];
        return $tempResult;
    }
    
    /**
     * 设置是否自定义计重.true为自定义计重,false反之.     
     * @param Boolean $isPackSell     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setIsPackSell( $isPackSell) {
        $this->sdkStdResult["isPackSell"] = $isPackSell;
    }
    
        
        /**
    * @return isPackSell为true时,此项必填。购买几件以内不增加运费。取值范围1-1000
    */
        public function getBaseUnit() {
        $tempResult = $this->sdkStdResult["baseUnit"];
        return $tempResult;
    }
    
    /**
     * 设置isPackSell为true时,此项必填。购买几件以内不增加运费。取值范围1-1000     
     * @param Integer $baseUnit     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setBaseUnit( $baseUnit) {
        $this->sdkStdResult["baseUnit"] = $baseUnit;
    }
    
        
        /**
    * @return isPackSell为true时,此项必填。  每增加件数.取值范围1-1000。
    */
        public function getAddUnit() {
        $tempResult = $this->sdkStdResult["addUnit"];
        return $tempResult;
    }
    
    /**
     * 设置isPackSell为true时,此项必填。  每增加件数.取值范围1-1000。     
     * @param Integer $addUnit     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setAddUnit( $addUnit) {
        $this->sdkStdResult["addUnit"] = $addUnit;
    }
    
        
        /**
    * @return isPackSell为true时,此项必填。  对应增加的重量.取值范围:0.001-500.000,保留三位小数,采用进位制,单位:公斤。
    */
        public function getAddWeight() {
        $tempResult = $this->sdkStdResult["addWeight"];
        return $tempResult;
    }
    
    /**
     * 设置isPackSell为true时,此项必填。  对应增加的重量.取值范围:0.001-500.000,保留三位小数,采用进位制,单位:公斤。     
     * @param String $addWeight     
     * 参数示例：<pre>30.11</pre>     
     * 此参数必填     */
    public function setAddWeight( $addWeight) {
        $this->sdkStdResult["addWeight"] = $addWeight;
    }
    
        
        /**
    * @return 商品有效天数。取值范围:1-30,单位:天。
    */
        public function getWsValidNum() {
        $tempResult = $this->sdkStdResult["wsValidNum"];
        return $tempResult;
    }
    
    /**
     * 设置商品有效天数。取值范围:1-30,单位:天。     
     * @param Integer $wsValidNum     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setWsValidNum( $wsValidNum) {
        $this->sdkStdResult["wsValidNum"] = $wsValidNum;
    }
    
        
        /**
    * @return 产品属性，以json格式进行封装后提交。参看aeopAeProductPropertys数据结构。此字段是否必填，需从类目接口getAttributesResultByCateId获取（即获取到的required来判断属性是否必填），该项只输入普通类目属性数据，不可输入sku类目属性。
对于类目属性包含子类目属性的情况，此处不确认父属性和子属性，即选择任何属性，都以该对象提交。
对于一个属性多个选中值的情况，以多个该对象存放。
其中"attrNameId","attrValueId"为整型(Integer), "attrName", "attrValue"为字符串类型(String)。
         i).  当设置一些系统属性时，如果类目自定义了一些候选值，只需要提供"attrNameId"和"attrValueId"即可。例如：{"attrNameId":494, "attrValueId":284}。
         ii). 当设置一些需要手工输入属性内容时，只需要提供"attrNameId"和"attrValue"即可。例如：{"attrNameId": 1000, "attrValue": "test"}
         iii）当设置自定义属性时，需要提供"attrName"和"attrValue"即可。例如: {"attrName": "Color", "attrValue": "red"}
         iv） 当设置一个Other属性时，需要提供"attrNameId", "attrValueId", "attrValue"三个参数。例如：{"attrNameId": 1000, "attrValueId": 4, "attrValue": "Other Value"}。
    */
        public function getAeopAeProductPropertys() {
        $tempResult = $this->sdkStdResult["aeopAeProductPropertys"];
        return $tempResult;
    }
    
    /**
     * 设置产品属性，以json格式进行封装后提交。参看aeopAeProductPropertys数据结构。此字段是否必填，需从类目接口getAttributesResultByCateId获取（即获取到的required来判断属性是否必填），该项只输入普通类目属性数据，不可输入sku类目属性。
对于类目属性包含子类目属性的情况，此处不确认父属性和子属性，即选择任何属性，都以该对象提交。
对于一个属性多个选中值的情况，以多个该对象存放。
其中"attrNameId","attrValueId"为整型(Integer), "attrName", "attrValue"为字符串类型(String)。
         i).  当设置一些系统属性时，如果类目自定义了一些候选值，只需要提供"attrNameId"和"attrValueId"即可。例如：{"attrNameId":494, "attrValueId":284}。
         ii). 当设置一些需要手工输入属性内容时，只需要提供"attrNameId"和"attrValue"即可。例如：{"attrNameId": 1000, "attrValue": "test"}
         iii）当设置自定义属性时，需要提供"attrName"和"attrValue"即可。例如: {"attrName": "Color", "attrValue": "red"}
         iv） 当设置一个Other属性时，需要提供"attrNameId", "attrValueId", "attrValue"三个参数。例如：{"attrNameId": 1000, "attrValueId": 4, "attrValue": "Other Value"}。     
     * @param array include @see AeopAeProductPropertys[] $aeopAeProductPropertys     
     * 参数示例：<pre>"aeopAeProductPropertys": [
      {
         "attrValueId": 494,
         "attrNameId": 284
      },
      {
         "attrValueId": 200004213,
         "attrNameId": 200000309
      },
      {
         "attrValueId": 1875,
         "attrNameId": 200000303
      },
      {
         "attrName": "Modeling clothing",
         "attrValue": "slim"
      },
      {
         "attrName": "clothes design details",
         "attrValue": "wool collar"
      }
]</pre>     
     * 此参数必填     */
    public function setAeopAeProductPropertys(AeopAeProductPropertys $aeopAeProductPropertys) {
        $this->sdkStdResult["aeopAeProductPropertys"] = $aeopAeProductPropertys;
    }
    
        
        /**
    * @return 批发最小数量 。取值范围2-100000。批发最小数量和批发折扣需同时有值或无值。
    */
        public function getBulkOrder() {
        $tempResult = $this->sdkStdResult["bulkOrder"];
        return $tempResult;
    }
    
    /**
     * 设置批发最小数量 。取值范围2-100000。批发最小数量和批发折扣需同时有值或无值。     
     * @param Integer $bulkOrder     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setBulkOrder( $bulkOrder) {
        $this->sdkStdResult["bulkOrder"] = $bulkOrder;
    }
    
        
        /**
    * @return 批发折扣。扩大100倍，存整数。取值范围:1-99。注意：这是折扣，不是打折率。 如,打68折,则存32。批发最小数量和批发折扣需同时有值或无值。
    */
        public function getBulkDiscount() {
        $tempResult = $this->sdkStdResult["bulkDiscount"];
        return $tempResult;
    }
    
    /**
     * 设置批发折扣。扩大100倍，存整数。取值范围:1-99。注意：这是折扣，不是打折率。 如,打68折,则存32。批发最小数量和批发折扣需同时有值或无值。     
     * @param Integer $bulkDiscount     
     * 参数示例：<pre>90</pre>     
     * 此参数必填     */
    public function setBulkDiscount( $bulkDiscount) {
        $this->sdkStdResult["bulkDiscount"] = $bulkDiscount;
    }
    
        
        /**
    * @return 产品分组ID
    */
        public function getGroupId() {
        $tempResult = $this->sdkStdResult["groupId"];
        return $tempResult;
    }
    
    /**
     * 设置产品分组ID     
     * @param Long $groupId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }
    
        
        /**
    * @return 库存扣减策略
    */
        public function getReduceStrategy() {
        $tempResult = $this->sdkStdResult["reduceStrategy"];
        return $tempResult;
    }
    
    /**
     * 设置库存扣减策略     
     * @param String $reduceStrategy     
     * 参数示例：<pre>place_order_withhold或payment_success_deduct</pre>     
     * 此参数必填     */
    public function setReduceStrategy( $reduceStrategy) {
        $this->sdkStdResult["reduceStrategy"] = $reduceStrategy;
    }
    
        
        /**
    * @return 货币单位。如果不提供该值信息，则默认为"USD"；非俄罗斯卖家这个属性值可以不提供。对于俄罗斯海外卖家，该单位值必须提供，如: "RUB"。
    */
        public function getCurrencyCode() {
        $tempResult = $this->sdkStdResult["currencyCode"];
        return $tempResult;
    }
    
    /**
     * 设置货币单位。如果不提供该值信息，则默认为"USD"；非俄罗斯卖家这个属性值可以不提供。对于俄罗斯海外卖家，该单位值必须提供，如: "RUB"。     
     * @param String $currencyCode     
     * 参数示例：<pre>USD;RUB</pre>     
     * 此参数必填     */
    public function setCurrencyCode( $currencyCode) {
        $this->sdkStdResult["currencyCode"] = $currencyCode;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>