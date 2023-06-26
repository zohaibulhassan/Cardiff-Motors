@extends($activeTemplate.'layouts.frontend')
@section('content')
<div class="section">
    
@include($activeTemplate.'sections.banner')
@include($activeTemplate.'partials.filters')
@include($activeTemplate.'partials.products')
@include($activeTemplate.'partials.about')
@include($activeTemplate.'partials.count')
@include($activeTemplate.'partials.services')
@include($activeTemplate.'partials.gallery')
@include($activeTemplate.'partials.contact')
@include($activeTemplate.'partials.reviews')


</div>
@endsection
