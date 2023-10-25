<script src="{{ asset('assets/js/loader.js') }}"></script>
<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">

<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />

<link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />


<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widgets/modules-widgets.css') }}">   
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">

 <link href="{{ asset('assets/css/apps/scrumboard.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('assets/css/apps/notes.css') }}" rel="stylesheet" type="text/css" /> 
 
 
<style>
	aside {
		display: none!important;
	}
	.page-item.active .page-link {
		z-index: 3;
		color: #fff;
		background-color: #3b3f5c;
		border-color: #3b3f5c;
	}

	@media (max-width: 480px) 
	{
		.mtmobile {
			margin-bottom: 20px!important;
		}
		.mbmobile {
			margin-bottom: 10px!important;
		}
		.hideonsm {
			display: none!important;
		}
		.inblock {
			display: block;
		}
		
	}

	.sidebar-theme #compactSidebar{

background: rgb(25,25,54);
background: linear-gradient(to top, rgba(52,67,106,1) 12%, rgba(28,74,83,1) 30%, rgba(25,25,54,1) 57%);


}


.header-theme #compactSidebar{
background: #3b3f5c!important;
}
.navbar .navbar-item .nav-item form.form-inline input.search-form-control {
font-size: 15px;
background-color: #edeef3!important;
padding-right: 40px;
padding-top: 12px;
border: none;
color: #fff;
box-shadow: none;
border-radius: 30px;
}
.navbar {
padding: 0 0 0 20px;
background: rgb(25,25,54);
background: linear-gradient(to top, rgba(52,67,106,1) 12%, rgba(28,74,83,1) 30%, rgba(25,25,54,1) 57%);
min-height: 80px;
color: #fff
border-bottom: 1px solid #fafafa;
border-block-color: #000000;
-webkit-transition: .3s ease all;
transition: .3s ease all;
-webkit-box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
-moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
box-shadow: 0 4px 6px 0 rgb(85 85 85 / 8%), 0 1px 20px 0 rgb(0 0 0 / 7%), 0px 1px 11px 0px rgb(0 0 0 / 7%);
}
#content {
    width: 50%;
    flex-grow: 8;
    margin-top: 80px;
    margin-bottom: 0;
    margin-left: 150px;
    -webkit-transition: .3s ease all;
    transition: .3s ease all;
    background: rgb(52,67,106);
    background: linear-gradient(90deg, rgb(166, 174, 182) 9%, rgba(131,193,205,1) 73%, rgba(135,205,149,1) 94%);
}




</style>


 <link href="{{ asset('plugins/flatpickr/flatpickr.dark.css') }}" rel="stylesheet" type="text/css" /> 

@livewireStyles