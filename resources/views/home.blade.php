@extends('layout')

@section('content')

<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="me-md-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 py-3">
            <h2 class="display-5">Julian Vieser</h2>
            <p class="promo-block-text">Webentwickler</p>
            <table class="mx-auto">
                <tr>
                    <td class="w-25">
                        <a target="_blank" href="https://www.xing.com/profile/Julian_Vieser/" class="fa fa-xing fa-2x"></a>
                    </td>
                    <td class="w-25">
                        <a target="_blank" href="https://www.linkedin.com/in/julian-vieser-a5658279/" class="fa fa-linkedin fa-2x"></a>
                    </td>
                    <td class="w-25">
                        <a target="_blank" href="https://github.com/Terrah4wk" class="fa fa-github fa-2x"></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="me-md-3 px-3 px-md-5 text-center overflow-hidden">
        <img
            src="https://jvieser.de/images/julian_vieser.jpeg"
            class="img-fluid rounded-circle shadow-sm mx-auto" style="width: 75%;"
            alt="Julian Vieser" title="Julian"
            />
    </div>
</div>

@endsection