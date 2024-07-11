<!-- @csrf need in form -->

<div id="User">
    <h1>Add a new User</h1>
    <form action="add-new" method="post" class="userForm">
            @csrf
        <input type="text" name="name" placeholder="Enter you name">
        <input type="email" name="email" placeholder="Enter you valid email">
        <textarea name="msg" placeholder="write something..."></textarea>
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
    
</style>