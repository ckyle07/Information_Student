<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Information</title>
</head>
<body>
    <div class="container">
        <form action="<?= base_url("Save") ?>" method="post">
            <?php if(isset($var['ID'])){?>
                <input type="hidden" name="ID" value="<?=$var['ID']?>">
            <?php }?>
            
            <label for="StudName">Name: </label> 
            <input type="text" ID="StudName" placeholder="Student Name" name="StudName" required value="<?= isset($var['StudName']) ? $var['StudName'] : '' ?>">
            <br>
            <label for="StudGender">Gender: </label>
            <select type="box" name="StudGender" placeholder="Student Gender" name="StudGender" required value="<?= isset($var['StudGender']) ? $var['StudGender'] : '' ?>">>
                <option></option>
                <option>Female</option>
                <option>Male</option>
            </select>
            <br>
            <label for="StudCourse">Course: </label>
            <input type="text" ID="StudCourse" placeholder="Student Course" name="StudCourse" required value="<?= isset($var['StudCourse']) ? $var['StudCourse'] : '' ?>">
            <br>
            <label for="StudSection">Section: </label>
            <input type="text" ID="StudSection" placeholder="Student Section" name="StudSection" required value="<?= isset($var['StudSection']) ? $var['StudSection'] : '' ?>">
            <br>
            <label for="StudYear">Year Level: </label>
            <input type="number" ID="StudYear" placeholder="Student Year Level" name="StudYear" required value="<?= isset($var['StudYear']) ? $var['StudYear'] : '' ?>">
            <br>
            <input type="submit" value="Save">
        </form>

        <h2>STUDENT INFORMATION</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Section</th>
                <th>YearLevel</th>
                <th>Action</th>
            </tr>

            <?php foreach($main as $mmodel): ?>
                <tr>
                    <th><?=$mmodel['ID']   ?></th>
                    <th><?=$mmodel['StudName'] ?></th>
                    <th><?=$mmodel['StudGender'] ?></th>
                    <th><?=$mmodel['StudCourse'] ?></th>
                    <th><?=$mmodel['StudSection'] ?></th>
                    <th><?=$mmodel['StudYear'] ?></th>
                    <th><a href="/Delete/<?=$mmodel['ID']?>">Delete</a> || <a href="/Update/<?=$mmodel['ID']?>">Update</a> </th>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>