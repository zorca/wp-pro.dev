@extends('layouts.main')

@section('content')
  @while (have_posts()) @php(the_post())
    <h1>{{the_title()}}</h1>
    {!!ParsedownExtra::instance()->parse(get_the_content())!!}
  @endwhile
@endsection
