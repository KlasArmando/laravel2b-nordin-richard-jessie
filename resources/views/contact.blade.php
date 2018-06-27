@extends('layouts.master')
@section('content')
    <div class="item3"><div class="container">
            <form>
                <ul class="flex-outer">
                    <li>
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" placeholder="Enter your first name here">
                    </li>
                    <li>
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" placeholder="Enter your last name here">
                    </li>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter your email here">
                    </li>
                    <li>
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" placeholder="Enter your phone here">
                    </li>
                    <li>
                        <label for="message">Message</label>
                        <textarea rows="6" id="message" placeholder="Enter your message here"></textarea>
                    </li>
                    <li>
                        <button type="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    <div class="item5"><div class="footer">
            <a href="{{url('contact')}}">Contact</a>
        </div></div>
</div>
</div>
@endsection