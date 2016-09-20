<form action="{{ url('/auth/azure') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.login') }}</button>
</form>
