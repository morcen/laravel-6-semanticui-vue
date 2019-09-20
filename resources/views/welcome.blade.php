@extends('layouts.app')

@section('content')
    <template>
        <div class="container">
            <sui-button basic primary>Primary</sui-button>
            <sui-button basic secondary>Secondary</sui-button>
            <sui-button basic positive>Positive</sui-button>
            <sui-button basic negative>Negative</sui-button>
        </div>
    </template>

    <script>
      export default {
        name: 'CustomButton',
      };
    </script>
@endsection
