<!-- @csrf need in form -->


<!-- form error handle -->

<!-- {{print_r($errors)}} -->

<!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
@endif -->


<div id="User">
    <h1>Add a new User</h1>
    <form action="add-new" method="post" class="userForm">
            @csrf
        <input type="text" name="name" placeholder="Enter you name" value="{{old('name')}}"  class="{{ $errors->first('name') ? 'input-error' : '' }}">
        <span style="color: red;">@error('name') {{$message}} @enderror</span>

        <input type="email" name="email" placeholder="Enter you valid email">
        <span style="color: red;">@error("email") {{$message}} @enderror</span>

        <div>
            <h3>Skills</h3>
            <span style="color: red;">@error("skill") {{$message}} @enderror</span>
            <div id="checkField">
                <div>
                    <input type="checkbox" name="skill[]" value="php" id="php">
                    <label for="php">PHP</label>
                </div>
                <div>
                    <input type="checkbox" name="skill[]" value="nodeJs" id="nodeJs">
                    <label for="nodeJs">NodeJs</label>
                </div>
                <div>
                    <input type="checkbox" name="skill[]" value="Html" id="Html">
                    <label for="Html">Html</label>
                </div>
            </div>
        </div>
        <textarea name="msg" placeholder="write something..."></textarea>
        <span style="color: red;">@error("msg") {{$message}} @enderror</span>

        <button>Add New User</button>
    </form>
</div>

<style>
    #User {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center
    }
    .userForm {
        width: 350px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .input-error {
        border: 1px solid red;
        color: red;
    }
    .userForm input {
        height: 40px;
    }
    .userForm textarea {
        height: 120px;
    }
    .userForm button {
        border: none;
        font-size: 16px;
        font-weight: bold;
        padding: .6rem 0;
        border-radius: 8px;
    }
    .userForm #checkField {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .userForm #checkField h3 {
        margin: 0;
    }
    .userForm #checkField div {
        display: flex;
        align-items: center;
    }
    
</style>