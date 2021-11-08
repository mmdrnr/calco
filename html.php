<!DOCTYPE html>
    <html lang="utf-8">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>

         <form method="post" action="/phhp.php">
            <input type="text" name="n1">
            <input type="text" name="n2">
            <select name="operator" id="">
               <option>انتخاب عملگر</option>
               <option>جمع</option>
               <option>کم</option>
               <option>ضرب</option>
               <option>تقسیم</option>
               <option>توان</option>
            </select>
            <button type="submit" name="submit" value="submit">جواب</button>
         </form>
