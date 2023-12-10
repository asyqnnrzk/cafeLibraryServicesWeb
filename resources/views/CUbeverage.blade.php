<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/CUuser.css">
    <title>Create or Update Page for Beverage</title>
</head>
<body>
    <header>
        <h1 >Create or Update for Beverage <button style="float: right">Profile</button></h1>
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
                                <input type="text" name="name" placeholder="eg: Latte, Cappuccino">
                            </td>
                        </tr>
                        <tr>
                            <td>Category ID:</td>
                            <td>
                                <input type="number" name="category" placeholder="eg: 12345">
                            </td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>
                                <input type="number" name="price" placeholder="eg: 12.40">
                            </td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <input type="number" name="status" placeholder="0 for inactive, 1 for active" min="0" max="1" style="width: 170px">
                            </td>
                        </tr>
                        <tr>
                            <td>Cafe ID:</td>
                            <td>
                                <input type="number" name="cafe" placeholder="eg: 12345">
                            </td>
                        </tr>
                        <tr>
                            <td>Remark:</td>
                            <td>
                                <input type="text" name="remark" placeholder="eg: Damage, Lost">
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