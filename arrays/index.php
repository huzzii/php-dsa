<?php 

// The Problem is to find the maximum sub array value of an array 

// solution1 : naive Approach where the time complexity is O(n^2) 

// function maxSubArray($array){
//     $totalLength = count($array);
//     $maxVal = 0;

//     for($outerVal = 0; $outerVal< $totalLength; $outerVal++){
//         $sum = 0;
//         for($innerVal= $outerVal; $innerVal<$totalLength; $innerVal++){
//             $sum += $array[$innerVal];

//             if($sum > $maxVal){
//                 $maxVal = $sum;
//             }
//         }
//     }
//     return $maxVal;
// }
// var_dump(maxSubArray([-1,-2,3,4,-5]));

// solution2: kadane's algorithm where the time complexity is O(n)
//Function to find the sum of contiguous subarray with maximum sum.

// function maxSubarraySum($arr, $N){
//     $total = $N;
//     $maxVal = $arr[0];
//     $currentMaxVal = $arr[0];
    
//     for($iterator = 1; $iterator < $total; $iterator++){
//         if($currentMaxVal + $arr[$iterator] > $arr[$iterator]){
//             $currentMaxVal = $currentMaxVal + $arr[$iterator];
//         } else {
//             $currentMaxVal = $arr[$iterator];
//         }
        
//         if($currentMaxVal > $maxVal){
//             $maxVal = $currentMaxVal;
//         }
//     }
//     return $maxVal;
// } 
// var_dump(maxSubarraySum([-1,-2,3,4,-5], 5));
// -------------------------------------------------------------------------

// The Problem is to find the sum of all the elements of an array: two pointer approach
// function sumOfArray($array){
//     if (count($array) === 1) {
//         return $array[0];
//     }

//     $leftIndex = 0;
//     $rightIndex = count($array) -1;
//     $sumOfArr = 0;

//     while($leftIndex < $rightIndex){
//         if($leftIndex === $rightIndex){
//             $sumOfArr += $array[$leftIndex];
//             break;
//         }
//         $sumOfArr += $array[$leftIndex] + $array[$rightIndex];
//         $leftIndex++;
//         $rightIndex--;
//     }
//     return $sumOfArr;
// }
// var_dump(sumOfArray([1,2,3,-1]));

?>