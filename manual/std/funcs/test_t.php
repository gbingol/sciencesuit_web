<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ttest</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">


    .auto-style2 {
            border-collapse: collapse;
            border-style: solid;
            border-width: 1px;
    }
    .auto-style3 {
            color: #008080;
            font-size: small;
    }
    .auto-style4 {
            font-size: small;
    }
    .auto-style5 {
            color: #000000;
            font-size: small;
    }
                    .auto-style6 {
            color: #0000FF;
    }
    .auto-style7 {
            background-color: #FFFF00;
    }
    .auto-style8 {
            color: black;
            font-size: 11.0pt;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            font-family: Calibri, sans-serif;
            text-align: center;
            vertical-align: bottom;
            white-space: nowrap;
            border-style: none;
            border-color: inherit;
            border-width: medium;
            padding-left: 1px;
            padding-right: 1px;
            padding-top: 1px;
            background-color: #FFFF00;
    }
    .auto-style9 {
            background-color: #00FFFF;
    }
        
        .auto-style11 {
            
            color: #008080;
        }
        .auto-style12 {
            
            color: #008000;
        }
        .auto-style13 {
            color: #FF0000;
        }
        .auto-style14 {
            font-style: normal;
        }
        .auto-style15 {
            color: #008000;
        }
        
        ol.spaced li
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        table
        {
            border: 1px solid;
            
            border-collapse: collapse;
        }
        
        table td
        {
            padding: 6px;
            
            border: 1px solid;
        }
        
    </style>

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>t test</h1>

<p>
    Performs 1-sample, 2-sample and paired t-test. The function returns the p-value and a table 
    with information which depends on the test being applied.
</p>


<p class="funcsignature">
    test_t
    {x=, [y=], varequal=<span class="auto-style6">true</span>, 
    alternative="two.sided", mu=<span class="auto-style15">0</span>, 
    conflevel=0.95, paired=<span class="auto-style6">false</span>
    }
</p>



<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td><em>x:</em></td>
        <td>First sample &larr; <em>Vector/Array</em></td>
    </tr>
    <tr>
        <td><em>y:</em></td>
        <td>Second sample &larr; <em>Vector/Array</em></td>
    </tr>
    <tr>
        <td><em>varequal:</em></td>
        <td>Assuming equal variances &larr; <em>boolean</em></td>
    </tr>
    <tr>
        <td><em>alternative:</em></td>
        <td>“two.sided”, “less”, “greater”, &larr; string</td>
    </tr>
    <tr>
        <td><em>mu:</em></td>
        <td>Assumed difference between samples or assumed mean &larr; <em>number</em></td>
    </tr>
    <tr>
        <td><em>conflevel:</em></td>
        <td>Confidence level, [0,1] &larr; <em>number</em></td>
    </tr>
    <tr>
        <td><em>paired:</em></td>
        <td>For paired t-test &larr; <em>boolean</em></td>
    </tr>
</table>


<p><em>Notes:</em></p>
<ol>
    <li>
        If only argument <em>x</em> is provided then arguments <em>paired</em> and <em>varequal</em> 
        have no effect and argument <span class="auto-style15"><em>mu</em></span> must be provided.
    </li>
    
    <li>
        If <em>x</em> and <em>y</em> are provided but <em>paired</em>=<span class="LuaKeyword">true</span>, 
        then <em>varequal</em> has no effect.
    </li>
</ol>

<p>&nbsp;</p>



<h3>Possible Usage:</h3>

<ol class="linespaced">
    <li>
        <em><span class="auto-style13">1-sample t-test:</span> test_t{x=, mu=, alternative="two.sided", conflevel=0.95}</em>
    </li>
    
    <li>
        <span class="auto-style13"><em>2-sample t-test:</em></span> <em>
            test_t{x=, y=, varequal=<span class="LuaKeyword">true</span>, alternative="two.sided", mu=0, conflevel=0.95}</em>
    </li>
    
    <li><span class="auto-style13"><em>paired t-test:</em></span> 
        <em>test_t{x=, y=, alternative="two.sided", mu=0, conflevel=0.95, paired=<span class="LuaKeyword">true</span>}</em>
    </li>

</ol>





<p>&nbsp;</p>
<p>&nbsp;</p>






<h3>1-Sample t-test</h3>
<p>
    If the standard deviation of the population is not known 
    we use the one-sample t-test procedure to test &mu;=&mu;<sub>0</sub>.
</p>

<img src="../images/test_t_1sampleequation.png" alt=""/>
    
    


<p>&nbsp;</p>
<p>&nbsp;</p>




<h3>2-Sample t-test</h3>
<p>
    Suppose that a given experiment consists of two independent random samples 
    X<sub>1</sub>, X<sub>2</sub>,…, X<sub>n</sub> and Y<sub>1</sub>, Y<sub>2</sub>,…,Y<sub>m</sub>. 
    Let  &mu;<sub>X</sub> and &mu;<sub>Y</sub> denote their means, respectively. 
    We test H<sub>0</sub>: &mu;<sub>X</sub>=&mu;<sub>Y</sub>.
</p>


<p>
    <b>A)</b> If both samples X and Y are from a normal distribution with standard deviation &sigma;, 
    then with <em>n+m-2</em> degrees of freedom:
</p>

<div style="display: flex; flex-direction: column;">
    <img style="align-self: flex-start;" src="../images/test_t_2sample_sp2.png" alt=""/><br>
    <img style="align-self: flex-start;" src="../images/test_t_2sample_tnm-2.png" alt=""/>
</div>



<p>&nbsp;</p>


<p>
    <b>B)</b> If samples X and Y are from normal distributions with standard deviations 
    &sigma;<sub>X</sub> and &sigma;<sub>Y</sub>, respectively, then with <em>v</em> degrees of freedom:
</p>

<div style="display: flex; flex-direction: column;">
    <img style="align-self: flex-start;" src="../images/test_t_2sample_v.png" alt=""/><br>
    <img style="align-self: flex-start;" src="../images/test_t_2sample_tv.png" alt=""/>
</div>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3>Paired t-test</h3>
<p>
    Suppose that a given experiment consists of two dependent random samples 
    X<sub>1</sub>, X<sub>2</sub>,…, X<sub>n</sub> and Y<sub>1</sub>, Y<sub>2</sub>,…,Y<sub>m</sub>.
    
    Then paired t-test is a <span class="auto-style15">1-sample t-test applied to <em class="auto-style14">X-Y</em></span>.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h2>Examples</h2>



<h3>Example#1:</h3> 

<p>
    Given the data v=[5, 6, 0, 4, 11, 9, 2, 3] we want to test whether the data is different than 8.3.
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.tovector{5, 6, 0, 4, 11, 9, 2, 3} <br />
    
    <br>
    <span class="auto-style11">-- 1 sample t-test</span><br />
    &gt;&gt;pval, tbl=std.test_t{x=v, mu=8.6} <br>
    
    <br>
    
    &gt;&gt;pval <br />
    0.0261955<br />
    
    <br>
    
    &gt;&gt;tbl <br />
    tcritical=-2.80868 &emsp; N=8 &emsp; stdev=3.62531 &emsp; mean=5 &emsp; CI_lower=1.96917&emsp; 
    CI_upper=8.03083 &emsp; SE=1.28174 
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<h3>Example #2:</h3>
<p>
    Following data is obtained for Degree of Reading Power 
    for 3rd graders*. We want to know whether there is a difference between control 
    group and treatment group.<br>
    
    
    <span class="auto-style5">*</span><span class="auto-style3">Maribeth C. Schmitt, 
    "The effects of an elaborated directed reading activity on the metacomprehension 
    skills of third graders," PhD thesis, Purdue University, 1987</span><span class="auto-style4"> 
    appeared 
    in </span><span class="auto-style3">David S. Moore, George P. McCabe, Bruce A. 
    Craig, Introduction to Practice of Statistics, 6th Edition, pp.452</span>
</p>


<table>
    
    <tr>
        <td colspan="4">
            <b>Treatment Group</b>
        </td>
        <td colspan="4">
            <b>Control group</b>
        </td>
    </tr>
    <tr>
        <td  class="auto-style9">24</td>
        <td  class="auto-style9">61</td>
        <td  class="auto-style9">59</td>
        <td  class="auto-style9">46</td>
        <td  class="auto-style7">42</td>
        <td  class="auto-style7">33</td>
        <td  class="auto-style7">46</td>
        <td  class="auto-style7">42</td>
    </tr>
    <tr>
        <td  class="auto-style9">43</td>
        <td  class="auto-style9">44</td>
        <td  class="auto-style9">52</td>
        <td  class="auto-style9">43</td>
        <td  class="auto-style7">43</td>
        <td  class="auto-style7">41</td>
        <td  class="auto-style7">10</td>
        <td  class="auto-style7">55</td>
    </tr>
    <tr>
        <td class="auto-style9">58</td>
        <td  class="auto-style9">67</td>
        <td  class="auto-style9">62</td>
        <td  class="auto-style9">57</td>
        <td  class="auto-style7">55</td>
        <td  class="auto-style7">19</td>
        <td  class="auto-style7">17</td>
        <td  class="auto-style7">26</td>
    </tr>
    <tr>
        <td  class="auto-style9">71</td>
        <td  class="auto-style9">49</td>
        <td  class="auto-style9">54</td>
        <td></td>
        <td  class="auto-style7">54</td>
        <td  class="auto-style7">60</td>
        <td  class="auto-style7">28</td>
        <td  class="auto-style7">62</td>
    </tr>
    <tr>
        <td  class="auto-style9">43</td>
        <td  class="auto-style9">53</td>
        <td  class="auto-style9">57</td>
        <td></td>
        <td  class="auto-style7">20</td>
        <td  class="auto-style7">53</td>
        <td  class="auto-style7">48</td>
        <td  class="auto-style7">37</td>
    </tr>
    <tr>
        <td  class="auto-style9">49</td>
        <td  class="auto-style9">56</td>
        <td  class="auto-style9">33</td>
        <td></td>
        <td  class="auto-style7">85</td>
        <td  class="auto-style7">42</td>
        <td  class="auto-style7">37</td>
        <td></td>
    </tr>
</table>


<p>
    Create two vectors/arrays, <em>treatment</em> and <em>control</em>, from the data in the worksheet. 
    See <a href="../../workbook/createdatastructures.php">how to create vectors</a>.
</p>


<p class="CodeCommand">
    <span class="LuaComment">--two sample t-test assuming unequal variances</span> <br />
    
    &gt;&gt;pval, tbl=std.test_t{x=treatment, y=control, varequal=false} <br>
    
    <br>
    
    &gt;&gt;pval <br />
    0.0265149<br />
    
    &gt;&gt;tbl<br />
    df=37&emsp; xaver=51.4762&emsp; yaver=41.5217&emsp; s1=11.0074&emsp; s2=17.1487&emsp;
    n1=21&emsp; n2=23&emsp; tcritical=2.31089&emsp; CI_lower=1.22637&emsp; CI_upper=18.6825&nbsp; 
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="dist_t.php">t Dist</a>
    <a href="../../apps/repo/test_t_1sample.php">1-Sample t-test App</a>
    <a href="../../apps/repo/test_t_2sample.php">2-sample t-test App</a>
    <a href="../../apps/repo/test_t_paired.php">Paired t-test App</a>
</div>
    
</body>

</html>
