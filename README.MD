Example

    $runTime = new ExecutionTime;
    $runTime->startTime();
    sleep( 2 );
    $runTime->endTime();
    echo "Time taken to run in seconds: " . $runTime->getTime();
   
