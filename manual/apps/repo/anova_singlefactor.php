<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>One-way ANOVA App</title>
    
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>

        td
        {
            border:solid 1px;
            
            padding-left:10px;
            
            padding-right:10px;
            
            text-align:center;
        }

        .auto-style2 
        {
            font-size: small;
        }

        </style>

      <script src="/jsscripts/siteanalytics.js"></script>  

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h2>Single-factor ANOVA</h2>
<p >
    Used when more than one level of data for a single-factor needs to 
    be analyzed. 
    
    The data can be arranged as unstacked or stacked and one-way ANOVA app can analyze both styles.
</p>

<img alt="" src="../images/anova_singlefactor.png" />

<p>
    <b>"My data is stacked":</b> If the response variables are stacked in a single column and 
    the factors are on a different column, the data is stacked. 
</p>

<p>
    <b>"Tukey’s Test":</b> If besides ANOVA results, the pairwise 
    comparisons of the observations are to be inspected. 
</p>

<p>&nbsp;</p>

<p>
    Let’s work on the following unstacked data 
    (<span class="auto-style2"><a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" 
        target="_blank">From: Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a></span>).
</p>

<table style="border:solid 1px; border-collapse:collapse">
    <tr>
        <td><b>Nonsmokers</b></td>
        <td><b>Light smokers</b></td>
        <td><b>Moderate</b></td>
        <td><b>Heavy</b></td>
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


<p>Running the app will prepare a report similar to the following:</p>


<table style="border:solid 1px; border-collapse:collapse">
    <tr>
        <td><em>Source</em></td>
        <td><em>df</em></td>
        <td><em>SS</em></td>
        <td><em>MS</em></td>
        <td><em>F</em></td>
        <td><em>P</em></td>
    </tr>
    <tr>
        <td><em>Treatment</em></td>
        <td>3</td>
        <td>1464</td>
        <td>488.0</td>
        <td>6.120</td>
        <td>0.00398</td>
    </tr>
    <tr>
        <td><em>Error</em></td>
        <td>20</td>
        <td>1595</td>
        <td>79.74</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><em>Total</em></td>
        <td>23</td>
        <td>3059</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>

<p>&nbsp;</p>
<p>
    Since the p-value tells us to reject the null hypothesis 
    (&mu;<sub>1</sub>=&mu;<sub>2</sub>=&mu;<sub>3</sub>=&mu;<sub>4</sub>), 
    it is instructive to run Tukey's test. If "Tukey’s test" option is checked, 
    the following will be appended to the above report:
</p>


<table style="border:solid 1px; border-collapse:collapse">
    <tr>
        <td><em>Pairwise Diff</em></td>
        <td><em>Difference (i-j)</em></td>
        <td><em>Tukey Interval</em></td>
        <td><em>Conclusion</em></td>
    </tr>
    <tr>
        <td>1-2</td>
        <td>-0.8333</td>
        <td>-15.26 , 13.60</td>
        <td>NS</td>
    </tr>
    <tr>
        <td>1-3</td>
        <td>-9.333</td>
        <td>-23.76 , 5.097</td>
        <td>NS</td>
    </tr>
    <tr>
        <td>1-4</td>
        <td>-19.33</td>
        <td>-33.76 , -4.903</td>
        <td>Reject</td>
    </tr>
    <tr>
        <td>2-3</td>
        <td>-8.500</td>
        <td>-22.93 , 5.930</td>
        <td>NS</td>
    </tr>
    <tr>
        <td>2-4</td>
        <td>-18.50</td>
        <td>-32.93 , -4.070</td>
        <td>Reject</td>
    </tr>
    <tr>
        <td>3-4</td>
        <td>-10.00</td>
        <td>-24.43 , 4.430</td>
        <td>NS</td>
    </tr>
</table>

<p>
    It is seen that, Tukey's test revealed that the differences stemmed from the pairs 
    (&mu;<sub>1</sub>&ne;μ<sub>4</sub>) and 
    (&mu;<sub>2</sub>&ne;μ<sub>4</sub>).
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="../../std/funcs/anova.php">anova</a>
    <a href="../../std/funcs/tukey.php">tukey</a>
</div>


</body>

</html>
