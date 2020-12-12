<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>tukey test</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
                    td
            {
                border:solid 1px;
                padding-left:10px;
                padding-right:10px;
                text-align:center;
            }


        .auto-style2 {
            font-size: small;
        }



    </style>  

</head>



<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>tukey</h1>
<p>Makes pair-wise comparisons and returns a Lua table containing the comparisons. The function resides under anova library.</p>
<p class="funcsignature">
    std.anova.tukey (AnovaTable, Alpha) &rarr; Lua Table (Tukey table) 
</p>

<p>
    <em>Note:</em> The argument AnovaTable must be calculated by the <a href="anova.php">anova</a> 
    function, therefore, Tukey's test must be performed after single-factor anova test.
</p>


<p>&nbsp;</p>

<h3>Example</h3>
<p>
    Let's work on the following unstacked data 
    (<span class="auto-style2">
        <a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">
            From: Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a>
    </span>).
</p>

<table style="border:solid 1px; border-collapse:collapse">
    <tr>
        <td><strong>Nonsmokers</strong></td>
        <td><strong>Light smokers</strong></td>
        <td><strong>Moderate</strong></td>
        <td><strong>Heavy</strong></td>
    </tr>

    <tr>
        <td>69</td>
        <td>55</td>
        <td>66</td>
        <td>91</td>
    </tr>
    <tr>
        <td>52</td>
        <td>60</td>
        <td>81</td>
        <td>72</td>
    </tr>
    <tr>
        <td>71</td>
        <td>78</td>
        <td>70</td>
        <td>81</td>
    </tr>
    <tr>
        <td>58</td>
        <td>58</td>
        <td>77</td>
        <td>67</td>
    </tr>
    <tr>
        <td>59</td>
        <td>62</td>
        <td>57</td>
        <td>95</td>
    </tr>
    <tr>
        <td>65</td>
        <td>66</td>
        <td>79</td>
        <td>84</td>
    </tr>
</table>



<p>&nbsp;</p>


<p>
    Create 4 vectors, namely v1, v2, v3 and v4, from each column of the data in the worksheet. 
    See <a href="../../workbook/index.php#createdatastructures">how to create vectors</a>. 
</p>


<p class="CodeCommand">
    &gt;&gt;pval, AnovaTable=std.anova(v1, v2, v3, v4) <br />

    <br />

    &gt;TukeyTable=std.anova.tukey(AnovaTable, 0.05) <br />

    <br />

    &gt;TukeyTable <br />
    Pairs&nbsp;&nbsp;&nbsp;&nbsp; Diff&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tukey Interval <br />
    1-2&nbsp;&nbsp;&nbsp;&nbsp; -0.8333&nbsp;&nbsp;&nbsp; -15.26 , 13.60 <br />
    1-3&nbsp;&nbsp;&nbsp;&nbsp; -9.333&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -23.76 , 5.097 <br />
    1-4&nbsp;&nbsp;&nbsp;&nbsp; -19.33&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -33.76 , -4.903 <br />
    2-3&nbsp;&nbsp;&nbsp;&nbsp; -8.500&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -22.93 , 5.930 <br />
    2-4&nbsp;&nbsp;&nbsp;&nbsp; -18.50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -32.93 , -4.070 <br />
    3-4&nbsp;&nbsp;&nbsp;&nbsp; -10.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -24.43 , 4.430
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="anova.php">anova</a>
    <a href="anova2.php">anova2</a>
    <a href="test_t.php">ttest</a>
    <a href="../../apps/repo/anova_singlefactor.php">Anova App</a>
</div>

</body>

</html>
