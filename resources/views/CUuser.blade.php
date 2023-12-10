<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/CUuser.css">
    <title>Create or Update Page for User</title>
</head>
<body>
    <header>
        <h1 >Create or Update for User <button style="float: right">Profile</button></h1>
    </header>
    <main>
        <div class="container">
            <button>Back</button>
            <form>
                <div id="form-container">
                    <table>
                        <tr>
                            <td>Name:</td>
                            <td>
                                <input type="text" name="name" placeholder="Alia binti Ahmad">
                            </td>
                        </tr>
                        <tr>
                            <td>Phone number:</td>
                            <td>
                                <input type="text" name="phonenum" placeholder="eg: 0123456789">
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="email" name="email" placeholder="eg: aliaahmad@gmail.com">
                            </td>
                        </tr>
                        <tr>
                            <td>Plain pasword:</td>
                            <td>
                                <input type="text" name="plain password" placeholder="eg: alia123">
                            </td>
                        </tr>
                        <tr>
                            <td>Role ID:</td>
                            <td>
                                <input type="number" name="role" placeholder="eg: 12345">
                            </td>
                        </tr>
                        <tr>
                            <td>Library ID:</td>
                            <td>
                                <input type="number" name="library" placeholder="[opt] eg: 12345">
                            </td>
                        </tr>
                        <tr>
                            <td>Cafe ID:</td>
                            <td>
                                <input type="number" name="cafe" placeholder="[opt] eg: 12345">
                            </td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <input type="number" name="status" placeholder="0 for inactive, 1 for active" min="0" max="1" style="width: 170px">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
           <button style="float: right" class="submit-btn">Submit</button>
        </div>
    </main>
    <footer>2023 Cafe Library Services</footer>
</body>
</html>