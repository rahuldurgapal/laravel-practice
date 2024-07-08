@php
  $user = "Rahul Durgapal";
  $fruits = ['apple','grapes','banana','orange'];
@endphp

<script>
    var data = @json($user);
    // var fruit = @json($fruits);

    var fruit = {{Js::from($fruits)}};
    fruit.forEach(function(entry) {
        console.log(entry);
    });
    console.log(data);
</script>