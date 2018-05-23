<p>以下为用户信息：</p>

<p>公司名: {{ $param['company'] }}</p>
<p>地址: {{ $param['address'] }}</p>
<p>姓名: {{ $param['name'] }}</p>
<p>公司电话: {{ $param['tel'] }}</p>
<p>手机: {{ $param['mobile'] }}</p>
<p>邮箱: {{ $param['email'] }}</p>

<p>以下为用户选择商品：</p>
@foreach($param['productCom'] as $p)
<p>{{ $p['name'] }}: {{ $p['numSuryo'] }}件</p>
@endforeach
