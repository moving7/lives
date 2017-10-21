@extends('i')
@section('content')

	
    <link rel="stylesheet" href="./css/userinfo_set.css">
<!-- <script src="//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f"></script> -->
        <div class="main-col">
            <div class="scroll-content">
            	<div class="mod userInfo-edit">
        	     <div class="mod-hd">
                        <a href="http://i.huya.com" class="back-to">返回</a>
                        <h3 style="border-left: none;">编辑资料</h3>
                    </div>
		
<!--                 	<form id="userInfoEdit" class="form-edit">
                		<ul>
							<li>
	                			<span class="edit-item">昵称</span>
	                			<input id="edit-nick" class="edit-name" type="text" name="user_name" maxlength="20" readonly="readonly" style="border: 0px;">
	                			<span class="edit-warning edit-warning_nick"></span>
	                		</li>
	                		<li>
	                			<span class="edit-item">个性签名</span>
	                			<textarea id="edit-sign" maxlength="20" class="edit-ps"></textarea>
	                			<span class="edit-warning">字段包含敏感字符，请重新输入！</span>
	                		</li>
	                		<li>
	                			<span class="edit-item">性别</span>
	                			<input class="edit-sex" type="radio" name="sex" value="1" checked="checked">男 
	                			<input class="edit-sex edit-sex_female" type="radio" value="2" name="sex">女
	                		</li>
	                		<li>
	                				                			<span class="edit-item">生日</span>
	                			<div class="select-box sb-year">
	                				<input id="edit-year" class="sb-selected J_sb-selected" type="text" name="" value="1999" readonly="readonly">
	                				
	                			<span>年</span>
	                			<div class="select-box sb-month sb-number">
	                				<input id="edit-month" class="sb-selected J_sb-selected" type="text" name="" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li>           				</ul>
	                			</div>
	                			<span>月</span>
	                			<div class="select-box sb-date sb-number">
	                				<input id="edit-date" class="sb-selected J_sb-selected" type="text" name="" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li>                				</ul>
	                			</div>
	                			<span>日</span>
	                		</li>
	                		<li>
	                			<span class="edit-item">所在地</span>
	                			<div class="select-box sb-prov">
	                				<input id="edit-area" class="sb-selected J_sb-selected" type="text" name="" value="北京" readonly="readonly">
	                				
	                			</div>
	                		</li>
	                		<li class="edit-submit"><a id="edit-submit" class="btn-submit clickstat" href="#" eid="click/grzx/infoedit/save" eid_desc="点击/个人中心/信息编辑/保存">保存</a></li>
                		</ul>
			                		
                	</form> -->
                	<form id="userInfoEdit" class="form-edit" method="post" action="/edit_do">
                		<ul>
							<li>
	                			<span class="edit-item">昵称</span>
	                			<input id="edit-nick" class="edit-name" type="text" name="user_name" maxlength="20" readonly="readonly" style="border: 0px;" value="{{$res['info_nickname']}}">
	                			<span class="edit-warning edit-warning_nick"></span>
	                		</li>
	                		<li>
	                			<span class="edit-item">个性签名</span>
	                			<textarea id="edit-sign" name="info_desc" maxlength="20" class="edit-ps">{{$res['info_desc']}}</textarea>
	                			<span class="edit-warning">字段包含敏感字符，请重新输入！</span>
	                		</li>
	                		<!-- <li> -->
	                			<!-- <span class="edit-item">手机号</span> -->
	                			<!-- <input id="edit-nick" class="edit-name" type="text" name="user_name" maxlength="20" style=""> -->
	                			<!-- <input class="edit-sex" type="radio" name="sex" value="1">男  -->
	                			<!-- <input class="edit-sex edit-sex_female" type="radio" value="2" name="sex" checked="">女 -->
	                		<!-- </li> -->
<!-- 	                		<li>
	                			<span class="edit-item">生日</span>
	                			<div class="select-box sb-year">
	                				<input id="edit-year" class="sb-selected J_sb-selected" type="text" name="" value="1999" readonly="readonly">
	                				<ul class="sb-list">
	                				<li class="sb-value" data-value="2017">2017</li><li class="sb-value" data-value="2016">2016</li><li class="sb-value" data-value="2015">2015</li><li class="sb-value" data-value="2014">2014</li><li class="sb-value" data-value="2013">2013</li><li class="sb-value" data-value="2012">2012</li><li class="sb-value" data-value="2011">2011</li><li class="sb-value" data-value="2010">2010</li><li class="sb-value" data-value="2009">2009</li><li class="sb-value" data-value="2008">2008</li><li class="sb-value" data-value="2007">2007</li><li class="sb-value" data-value="2006">2006</li><li class="sb-value" data-value="2005">2005</li><li class="sb-value" data-value="2004">2004</li><li class="sb-value" data-value="2003">2003</li><li class="sb-value" data-value="2002">2002</li><li class="sb-value" data-value="2001">2001</li><li class="sb-value" data-value="2000">2000</li><li class="sb-value" data-value="1999">1999</li><li class="sb-value" data-value="1998">1998</li><li class="sb-value" data-value="1997">1997</li><li class="sb-value" data-value="1996">1996</li><li class="sb-value" data-value="1995">1995</li><li class="sb-value" data-value="1994">1994</li><li class="sb-value" data-value="1993">1993</li><li class="sb-value" data-value="1992">1992</li><li class="sb-value" data-value="1991">1991</li><li class="sb-value" data-value="1990">1990</li><li class="sb-value" data-value="1989">1989</li><li class="sb-value" data-value="1988">1988</li><li class="sb-value" data-value="1987">1987</li><li class="sb-value" data-value="1986">1986</li><li class="sb-value" data-value="1985">1985</li><li class="sb-value" data-value="1984">1984</li><li class="sb-value" data-value="1983">1983</li><li class="sb-value" data-value="1982">1982</li><li class="sb-value" data-value="1981">1981</li><li class="sb-value" data-value="1980">1980</li><li class="sb-value" data-value="1979">1979</li><li class="sb-value" data-value="1978">1978</li><li class="sb-value" data-value="1977">1977</li><li class="sb-value" data-value="1976">1976</li><li class="sb-value" data-value="1975">1975</li><li class="sb-value" data-value="1974">1974</li><li class="sb-value" data-value="1973">1973</li><li class="sb-value" data-value="1972">1972</li><li class="sb-value" data-value="1971">1971</li><li class="sb-value" data-value="1970">1970</li><li class="sb-value" data-value="1969">1969</li><li class="sb-value" data-value="1968">1968</li><li class="sb-value" data-value="1967">1967</li><li class="sb-value" data-value="1966">1966</li><li class="sb-value" data-value="1965">1965</li><li class="sb-value" data-value="1964">1964</li><li class="sb-value" data-value="1963">1963</li><li class="sb-value" data-value="1962">1962</li><li class="sb-value" data-value="1961">1961</li><li class="sb-value" data-value="1960">1960</li><li class="sb-value" data-value="1959">1959</li><li class="sb-value" data-value="1958">1958</li><li class="sb-value" data-value="1957">1957</li><li class="sb-value" data-value="1956">1956</li><li class="sb-value" data-value="1955">1955</li><li class="sb-value" data-value="1954">1954</li><li class="sb-value" data-value="1953">1953</li><li class="sb-value" data-value="1952">1952</li><li class="sb-value" data-value="1951">1951</li><li class="sb-value" data-value="1950">1950</li><li class="sb-value" data-value="1949">1949</li><li class="sb-value" data-value="1948">1948</li><li class="sb-value" data-value="1947">1947</li><li class="sb-value" data-value="1946">1946</li><li class="sb-value" data-value="1945">1945</li><li class="sb-value" data-value="1944">1944</li><li class="sb-value" data-value="1943">1943</li><li class="sb-value" data-value="1942">1942</li><li class="sb-value" data-value="1941">1941</li><li class="sb-value" data-value="1940">1940</li><li class="sb-value" data-value="1939">1939</li><li class="sb-value" data-value="1938">1938</li><li class="sb-value" data-value="1937">1937</li><li class="sb-value" data-value="1936">1936</li><li class="sb-value" data-value="1935">1935</li><li class="sb-value" data-value="1934">1934</li><li class="sb-value" data-value="1933">1933</li><li class="sb-value" data-value="1932">1932</li><li class="sb-value" data-value="1931">1931</li><li class="sb-value" data-value="1930">1930</li><li class="sb-value" data-value="1929">1929</li><li class="sb-value" data-value="1928">1928</li><li class="sb-value" data-value="1927">1927</li><li class="sb-value" data-value="1926">1926</li><li class="sb-value" data-value="1925">1925</li><li class="sb-value" data-value="1924">1924</li><li class="sb-value" data-value="1923">1923</li><li class="sb-value" data-value="1922">1922</li><li class="sb-value" data-value="1921">1921</li><li class="sb-value" data-value="1920">1920</li><li class="sb-value" data-value="1919">1919</li><li class="sb-value" data-value="1918">1918</li><li class="sb-value" data-value="1917">1917</li><li class="sb-value" data-value="1916">1916</li><li class="sb-value" data-value="1915">1915</li><li class="sb-value" data-value="1914">1914</li><li class="sb-value" data-value="1913">1913</li><li class="sb-value" data-value="1912">1912</li><li class="sb-value" data-value="1911">1911</li><li class="sb-value" data-value="1910">1910</li><li class="sb-value" data-value="1909">1909</li><li class="sb-value" data-value="1908">1908</li><li class="sb-value" data-value="1907">1907</li><li class="sb-value" data-value="1906">1906</li><li class="sb-value" data-value="1905">1905</li><li class="sb-value" data-value="1904">1904</li><li class="sb-value" data-value="1903">1903</li><li class="sb-value" data-value="1902">1902</li><li class="sb-value" data-value="1901">1901</li>	                				</ul>
	                			</div>
	                			<span>年</span>
	                			<div class="select-box sb-month sb-number">
	                				<input id="edit-month" class="sb-selected J_sb-selected" type="text" name="" value="01" readonly="readonly">
	                				<ul class="sb-list" style="display: none;">
	                					<li class="sb-value" data-value="1">1</li><li class="sb-value" data-value="2">2</li><li class="sb-value" data-value="3">3</li><li class="sb-value" data-value="4">4</li><li class="sb-value" data-value="5">5</li><li class="sb-value" data-value="6">6</li><li class="sb-value" data-value="7">7</li><li class="sb-value" data-value="8">8</li><li class="sb-value" data-value="9">9</li><li class="sb-value" data-value="10">10</li><li class="sb-value" data-value="11">11</li><li class="sb-value" data-value="12">12</li>	                				</ul>
	                			</div>
	                			<span>月</span>
	                			<div class="select-box sb-date sb-number">
	                				<input id="edit-date" class="sb-selected J_sb-selected" type="text" name="" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li><li class="sb-value" data-value="2">2</li><li class="sb-value" data-value="3">3</li><li class="sb-value" data-value="4">4</li><li class="sb-value" data-value="5">5</li><li class="sb-value" data-value="6">6</li><li class="sb-value" data-value="7">7</li><li class="sb-value" data-value="8">8</li><li class="sb-value" data-value="9">9</li><li class="sb-value" data-value="10">10</li><li class="sb-value" data-value="11">11</li><li class="sb-value" data-value="12">12</li><li class="sb-value" data-value="13">13</li><li class="sb-value" data-value="14">14</li><li class="sb-value" data-value="15">15</li><li class="sb-value" data-value="16">16</li><li class="sb-value" data-value="17">17</li><li class="sb-value" data-value="18">18</li><li class="sb-value" data-value="19">19</li><li class="sb-value" data-value="20">20</li><li class="sb-value" data-value="21">21</li><li class="sb-value" data-value="22">22</li><li class="sb-value" data-value="23">23</li><li class="sb-value" data-value="24">24</li><li class="sb-value" data-value="25">25</li><li class="sb-value" data-value="26">26</li><li class="sb-value" data-value="27">27</li><li class="sb-value" data-value="28">28</li><li class="sb-value" data-value="29">29</li><li class="sb-value" data-value="30">30</li><li class="sb-value" data-value="31">31</li>	                				</ul>
	                			</div>
	                			<span>日</span>
	                		</li> -->
<!-- <a id="edit-submit" class="btn-submit clickstat" href="#" eid="click/grzx/infoedit/save" eid_desc="点击/个人中心/信息编辑/保存"></a> -->
							{{ csrf_field() }}
<li class="edit-submit"><input type="submit" class="btn-submit clickstat" style="border:#000;border-radius:7px;background-color:#f80" value="保存"></li>
</ul>

                	</form>
            	</div>
            </div>
        </div>

    </div>



@endsection