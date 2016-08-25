@extends('master')
@section('title')
{{trans('keywords.contact_title')}}
@stop
@section('description')
{{trans('keywords.contact_description')}}
@stop
@section('keywords')
{{trans('keywords.contact_keywords')}}
@stop

@section('content')
        <!-- Full-Width Area -->
<div class="fullwidth-area grid-100 tablet-grid-100 mobile-grid-100 grid-parent">


</div>

<!-- Content Area -->
<div class="content-area sidebar-column grid-parent grid-25 tablet-grid-25 hide-on-mobile">
    <nav class="nav">
        <ul>
            <li><a href="contact-service">{{trans('home.contact_service')}}</a></li>
        </ul>
    </nav>
    <div class="tagcloud-container content"></div>
</div>
<div class="content-area main-column with-sidebar grid-parent grid-75 tablet-grid-75 mobile-grid-100">
    <div class="grid-100 content">
        <h1>{{trans('home.contact_service')}}</h1>

        <div class="csc-default" style="margin-top:10px;margin-bottom:20px;">
            <div>{{trans('home.contact_content_1')}}
                <br><br>
                {{trans('home.contact_content_2')}}
                <br><br>
                {{trans('home.address_1')}} <br>
                {{trans('home.address_2')}} <br>
                Tel: +86 (371) 67826992 <br>
                Email: <a href="mailto:info@furnace-tech.com">info@furnace-tech.com</a>
            </div>
        </div>

        <div class="csc-default">
            <div class="csc-header csc-header-n4"><h1>{{trans('home.contact_form')}}</h1></div>
            <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads1909414000000097283 method='POST'
                  onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>
                {{--<div style="display:none;"><input type="hidden" name="Title*:" id="mailformTitle*:" value=""><input--}}
                {{--type="hidden" name="html_enabled" id="mailformhtml_enabled" value="1"><input--}}
                {{--type="hidden"--}}
                {{--name="subject"--}}
                {{--id="mailformsubject"--}}
                {{--value="Request from the CARBOLITE GERO website"><input--}}
                {{--name="requiredFields" type="hidden"--}}
                {{--value="Company\x2FOrganisation,Title,Name,First_Name,address,postcode,city,Country,Email,Phone,Request"><input--}}
                {{--type="hidden" name="locationData" value="2380319:tt_content:90094"></div>--}}
                        <!-- Do not remove this code. -->
                <input type='text' style='display:none;' name='xnQsjsdp'
                       value='40380622beee77c7a7f9ca99e7a3a010d5975d89fed22a020b8c40d044511c85'/>
                <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                <input type='text' style='display:none;' name='xmIwtLD'
                       value='7f8bfc673685e0b61448e282b2c7901c99b4c268d3f773945a27a2fe00244874'/>
                <input type='text' style='display:none;' name='actionType' value='TGVhZHM='/>

                <input type='text' style='display:none;' name='returnURL'
                       value='{{url('/submit_ok')}}'/>
                <input type='text' style='display:none;' id='ldeskuid' name='ldeskuid'>
                <input type='text' style='display:none;' id='LDTuvid' name='LDTuvid'>
                <!-- Do not remove this code. -->
                <input type='text' style='display:none;' id='Pre_url' name='LEADCF4' value="{{url()->previous()}}">
                <select style='display:none;' name='LEADCF3'>
                    <option value='-None-'>-无-</option>
                    <option selected value='&#x79d1;&#x4f73;'>科佳</option>
                    <option value='&#x666e;&#x6cf0;'>普泰</option>
                </select>
                {{--<div class="rform rform-inputrow rform-comment">--}}
                {{--<div class="rform-labelfield">--}}
                {{--<b>For Service Requests please use the <a href="service-spare-parts-request/index.html"--}}
                {{--class="external-link-new-window"--}}
                {{--alt="Service Form">Service Form</a></b>--}}
                {{--</div>--}}
                {{--<div class=="clear"><!-- ! --></div>--}}
                {{--</div>--}}
                {{--<div class="rform rform-inputrow">--}}
                {{--<div class="rform-label">Contact data</div>--}}
                {{--<div class=="clear"><!-- ! --></div>--}}
                {{--</div>--}}
                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformCompany/Organisation">{{trans('home.company_organisation')}}*:</label>
                    </div>
                    <input type="text" name="Company" id="mailformCompany/Organisation" size="20"
                           value="" class="rform-input"></div>

                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformTitle">{{trans('home.salutation')}}*:</label></div>
                    <select name="Salutation" id="mailformTitle" size="1">
                        <option value="-None-" selected="selected">{{trans('home.please_choose')}} ...</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Mr">Mr</option>
                        <option value="Dr">Dr</option>
                        <option value="Prof">Prof</option>
                    </select></div>

                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformFirst_Name">{{trans('home.first_name')}}*:</label></div>
                    <input type="text" name="First Name" id="mailformFirst_Name" size="20" value=""
                           class="rform-input"></div>


                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformcity">{{trans('home.city')}}*:</label></div>
                    <input type="text" name="City" id="mailformcity" size="20" class="rform-input"></div>

                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformEmail">E-mail*</label></div>
                    <input type="text" name="Email" id="mailformEmail" size="20" value="" class="rform-input"></div>
                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformPhone">Phone:</label></div>
                    <input type="text" name="Phone" id="mailformPhone" size="20" value="" class="rform-input"></div>
                <div class="rform rform-inputrow">
                    <div class="rform-label">{{trans('home.request')}}</div>
                    <div class=="clear"><!-- ! --></div>
                </div>
                <div class="rform rform-inputrow rform-comment">
                    <div class="rform-labelfield"><i>{{trans('home.contact_request')}}</i></div>
                    <div class=="clear"><!-- ! --></div>
                </div>
                <div class="rform rform-inputrow rform-required">
                    <div class="rform-labelfield rform-required"><label for="mailformRequest">{{trans('home.your_request')}}*:</label>
                    </div>
                    <textarea name="Description" id="mailformRequest" cols="20" rows="8"></textarea></div>





                <div class="rform rform-inputrow">
                    <div class="rform-labelfield"></div>
                    <input type="submit" name="formtype_mail" id="mailformformtype_mail" value="{{trans('home.submit')}}"
                           class="rform-submitbutton"></div>

                <script>
                    var mndFileds = new Array('Company', 'First Name', 'Last Name', 'Email', 'Phone', 'Lead Source', 'Industry', 'City', 'Country', 'Description', 'Salutation');
                    var fldLangVal = new Array('{{trans('home.company')}}', '{{trans('home.first_name')}}', '{{trans('home.last_name')}}', 'Email', 'Phone', 'Lead Source', '{{trans('home.industry')}}', '{{trans('home.city')}}', '{{trans('home.country')}}', '{{trans('home.request')}}', '{{trans('home.salutation')}}');
                    var name = '';
                    var email = '';

                    function checkMandatory() {
                        for (i = 0; i < mndFileds.length; i++) {
                            var fieldObj = document.forms['WebToLeads1909414000000097283'][mndFileds[i]];
                            if (fieldObj) {
                                if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                    if (fieldObj.type == 'file') {
                                        alert('{{trans('home.select_file')}}');
                                        fieldObj.focus();
                                        return false;
                                    }
                                    alert(fldLangVal[i] + ' {{trans('home.can_not_be_empty')}}');
                                    fieldObj.focus();
                                    return false;
                                } else if (fieldObj.nodeName == 'SELECT') {
                                    if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                        alert(fldLangVal[i] + ' {{trans('home.can_not_be_empty')}}');
                                        fieldObj.focus();
                                        return false;
                                    }
                                } else if (fieldObj.type == 'checkbox') {
                                    if (fieldObj.checked == false) {
                                        alert('Please accept  ' + fldLangVal[i]);
                                        fieldObj.focus();
                                        return false;
                                    }
                                }
                                try {
                                    if (fieldObj.name == 'Last Name') {
                                        name = fieldObj.value;
                                    }
                                } catch (e) {
                                }
                            }
                        }
                        trackVisitor();
                    }
                </script>
            </form>
        </div>
        <div class="csc-default">
            <div>
                <div class="rform rform-comment">
                    <div class="rform rform-inputrow">*{{trans('home.mandatory_fields')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop