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
                <form action='/submit_post' method='POST' accept-charset='UTF-8'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type='text' style='display:none;' id='Pre_url' name='pre_url' value="{{url()->previous()}}">


                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label
                                    for="mailformCompany/Organisation">{{trans('home.company_organisation')}}*:</label>
                        </div>
                        <input type="text" name="Company" id="mailformCompany/Organisation" size="20"
                               value="" class="rform-input"></div>

                    <div class="rform rform-inputrow rform-required">
                        <div class="rform-labelfield rform-required"><label
                                    for="mailformFirst_Name">{{trans('home.name')}}*:</label></div>
                        <input type="text" name="Name" id="mailformFirst_Name" size="20" value=""
                               class="rform-input"></div>


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
                        <div class="rform-labelfield rform-required"><label
                                    for="mailformRequest">{{trans('home.your_request')}}*:</label>
                        </div>
                        <textarea name="Description" id="mailformRequest" cols="20" rows="8"></textarea></div>


                    <div class="rform rform-inputrow">
                        <div class="rform-labelfield"></div>
                        <input type="submit" name="formtype_mail" id="mailformformtype_mail"
                               value="{{trans('home.submit')}}"
                               class="rform-submitbutton"></div>

                    {{--<script>--}}
                    {{--var mndFileds = new Array('Company', 'First Name', 'Last Name', 'Email', 'Phone', 'Lead Source', 'Industry', 'City', 'Country', 'Description', 'Salutation');--}}
                    {{--var fldLangVal = new Array('{{trans('home.company')}}', '{{trans('home.first_name')}}', '{{trans('home.last_name')}}', 'Email', 'Phone', 'Lead Source', '{{trans('home.industry')}}', '{{trans('home.city')}}', '{{trans('home.country')}}', '{{trans('home.request')}}', '{{trans('home.salutation')}}');--}}
                    {{--var name = '';--}}
                    {{--var email = '';--}}

                    {{--function checkMandatory() {--}}
                    {{--for (i = 0; i < mndFileds.length; i++) {--}}
                    {{--var fieldObj = document.forms['WebToLeads1909414000000097283'][mndFileds[i]];--}}
                    {{--if (fieldObj) {--}}
                    {{--if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {--}}
                    {{--if (fieldObj.type == 'file') {--}}
                    {{--alert('{{trans('home.select_file')}}');--}}
                    {{--fieldObj.focus();--}}
                    {{--return false;--}}
                    {{--}--}}
                    {{--alert(fldLangVal[i] + ' {{trans('home.can_not_be_empty')}}');--}}
                    {{--fieldObj.focus();--}}
                    {{--return false;--}}
                    {{--} else if (fieldObj.nodeName == 'SELECT') {--}}
                    {{--if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {--}}
                    {{--alert(fldLangVal[i] + ' {{trans('home.can_not_be_empty')}}');--}}
                    {{--fieldObj.focus();--}}
                    {{--return false;--}}
                    {{--}--}}
                    {{--} else if (fieldObj.type == 'checkbox') {--}}
                    {{--if (fieldObj.checked == false) {--}}
                    {{--alert('Please accept  ' + fldLangVal[i]);--}}
                    {{--fieldObj.focus();--}}
                    {{--return false;--}}
                    {{--}--}}
                    {{--}--}}
                    {{--try {--}}
                    {{--if (fieldObj.name == 'Last Name') {--}}
                    {{--name = fieldObj.value;--}}
                    {{--}--}}
                    {{--} catch (e) {--}}
                    {{--}--}}
                    {{--}--}}
                    {{--}--}}
                    {{--trackVisitor();--}}
                    {{--}--}}
                    {{--</script>--}}
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