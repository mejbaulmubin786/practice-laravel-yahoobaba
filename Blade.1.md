```php
{{5+3}}
<br><br>

<h1>{{"<h1>Mejbaul Muibin</h1>"}}</h1>
{{"<h1>Mejbaul Muibin</h1>"}}
<br><br>
<h1>{!!"<h1>Mejbaul Muibin</h1>"!!}</h1>
{!!"<script>alert('Mejbaul Muibin')</script>"!!}
{{"<script>alert('Mejbaul Muibin')</script>"}}
{{--Comment--}}
{{--"<script>alert('Mejbaul Muibin')</script>"--}}

@php
$user = "Mejbaul Mubin"; //-- কোন ভেরিয়েবল ব্লেড এ প্রিন্ট করতে চাইলে সেটা প্রথমে এসাই করতে হয়  এখানে এসাইন করা হয়েছে তবে তা করতে আমাদে php কোর্ড লিখতে হয়েছে php কোর্ড এভাবে লিখতে হয়।
@endphp
<br><br>
{{$user}} {{--যদিও এখাবে আমার কিচু প্রিন্ট করানোর দর হবে না কারন আমাদের তথ্য আসবে ডাটাবেইজ থেকে--}}

{{--উপরের ভেরিয়েবলের মতো যদি আমাদের কোন ভেরিয়েবল ব্যবহার করতে হয় যা এরে হবে --}}
@php
$names = ["Mejbaul Mubin", "Mejbaul", "Mubin", "Rubel", "Mejbaul Mubin (Rubel)"]
@endphp
{{--এখন যদি আমরা এরে এর সকল মান আন ওর্ডার লিস্টে প্রিন্ট করতে চাই --}}
<br><br>
{{$user}} {{--যদিও এখাবে আমার কিচু প্রিন্ট করানোর দর হবে না কারন আমাদের তথ্য আসবে ডাটাবেইজ থেকে--}}

<ul>
@for ($i = 0; $i < count($names); $i++)
    {!!"<li>$names[$i]</li>"!!} {{--!! দুই সাইডে ব্যবহার করে তার প্রোটেকশন বন্ধ করেছি যাতে কোর্ডকে স্ট্রিং হিসেবে না ধরে।--}}
@endfor
</ul>

<ul>
  @for ($i = 0; $i < count($names); $i++)
  <li>{{"$names[$i]"}}</li> {{--ডাটার প্রোটেকশন রেখে প্রিন্ট করলে--}}
  @endfor
</ul>

<ul>
  @foreach ($names as $name)
  <li>{{"$name"}}</li> {{--ডাটার প্রোটেকশন রেখে প্রিন্ট করলে--}}
  @endforeach
</ul>

@{{$user}} {{--আমরা প্রথমে যে $user ভেরিয়বল নিয়েছিলাম যদি আমরা চাই এর ভেলু প্রিন্ট না হয়ে এর নাম ই প্রিন্ট হয় তবে--}}
{{--Blade সিনটেক্স এর পূর্বে @ ব্যবহার করলে এই সেটমেন্ট টি আর কাজ করবে না সরাসরি প্রিন্ট হবে। --}}
<br>
@@for ($i = 0; $i < count($names); $i++)

{{--Loop Variable--}}

<ul>
  @foreach ($names as $name)
  <li>{{ $loop->index }}-{{"$name"}}</li> {{--লুপের বর্তমান ইটারেশনের ইনডেক্স নম্বর দেয় (০ থেকে শুরু করে)।--}}
  @endforeach
</ul>

<ul>
  @foreach ($names as $name)
  <li>Remaining iterations: {{ $loop->remaining }}</li> {{--লুপে আর কতগুলি ইটারেশন বাকি আছে তা জানায়।--}}
  @endforeach
</ul>




<ul>
  @foreach ($names as $name)
    @if($loop->first)
      <li style="color: red;">{{ $loop->index }} - {{ $name }}</li>
    @elseif($loop->last)
      <li style="color: green;">{{ $loop->index }} - {{ $name }}</li>
    @else
      <li>{{ $loop->index }} - {{ $name }}</li>
    @endif
  @endforeach
</ul>


<ul>
  @foreach ($names as $name)
    @if($loop->even)
      <li style="color: red;">{{ $loop->index }} - {{ $name }}</li>
    @elseif($loop->odd)
      <li style="color: green;">{{ $loop->index }} - {{ $name }}</li>
    @endif
  @endforeach
</ul>
```
