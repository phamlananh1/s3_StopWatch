<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    public function __construct()
    {
        $this->startTime = date('h:i:s');
    }
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function startTime()
    {
        $this->startTime = date('h:i:s');
    }
    public function stopTime()
    {
        $this->endTime = date('h:i:s');
    }
    function getElapsedTime() {
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}
?>
</body>
</html>