
        /*
        0: function name
        2: link

        if link does not exist explicitly, then link=functionname+.php

        */
       
       
       
var StdUtilLib = 
[
  ["toarray"], ["tokenize"], ["tomatrix"], ["totable"], ["tovector"]
].sort();


var StdFluidLib =
[
  ["psychrometry"], ["refrigerant"], ["range"], ["new"],["heattransfer"]
].sort();


var StdPlotLib =
[
  ["hwnd"], ["layout"]
].sort();
  


var StdLibFunctions = [
        ["abs"], ["acos"], ["asin"], ["atan"], ["ceil"], ["cos"], ["cosh"],
        
        ["cosh"], ["exp"], ["floor"], ["ln"], ["log10"], ["pow"], ["sin"], 
        
        ["sinh"], ["tan"], ["tanh"],
        
        //
        
        ["accumulate"], ["activeworksheet"], ["anova"], ["anova2"], 

        ["appendworksheet"], ["besselj", "specialfuncs.php#besselj"], ["beta", "specialfuncs.php#beta"],

        ["bisection"], ["boxplot"],  ["brentq"],
        
        ["const"], ["cor"], ["count"], ["cov"], ["cumsum"],

        ["cumtrapz"], ["cwd"], ["dbinom","dist_binom.php#dbinom"],

        ["dchisq","dist_chisq.php#dchisq"], ["det"], ["df","dist_f.php#df"],

        ["diag"], ["diff"], ["dnorm"],

        ["dpois","dist_pois.php#dpois"], ["dsignrank","dist_wilcox_signrank.php#dsignrank"],

        ["dt","dist_t.php#dt"], ["dunif","dist_unif.php#dunif"],

        ["eig"], ["expfit"], ["eye"], ["find","find.php#find"],

        ["find_if", "find.php#find_if"], ["findfirst_if","find.php#findfirst_if"],

        ["find_minmax","find.php#find_minmax"], ["for_each"], ["gamma", "specialfuncs.php#gamma"],

        ["gammaln", "specialfuncs.php#gammaln"], ["gcd"], ["inv"], ["kurt"],

        ["lcm"], ["linspace"], ["lm"], ["logfit"], ["lu"],

        ["max", "minmax.php#max"], ["mean"], ["median"],

        ["meshgrid"], ["minmax", "minmax.php"], ["min", "minmax.php#min"],

        ["mode"], ["newton"], ["null"], ["pbinom", "dist_binom.php#pbinom"],

        ["pchisq","dist_chisq.php#pchisq"], ["pf","dist_f.php#pf"],

        ["pnorm", "dist_norm.php#pnorm"],

        ["ppois","dist_pois.php#ppois"], ["psignrank","dist_wilcox_signrank.php#psignrank"],

        ["pt","dist_t.php#pt"], ["polyfit"], ["polyval"], ["powfit"],

        ["punif","dist_unif.php#punif"], ["qbinom","dist_binom.php#qbinom"],

        ["qchisq","dist_chisq.php#qchisq"], ["qf","dist_f.php#qf"], ["qnorm","dist_norm.php#qnorm"],

        ["qpois", "dist_pois.php#qpois"], ["qsignrank","dist_wilcox_signrank.php#qsignrank"],

        ["qt","dist_t.php#qt"], ["qr"], ["quantile"], ["qunif","dist_unif.php#qunif"],

        ["rand"], ["rank"], ["rbinom", "dist_binom.php#rbinom"], ["rchisq","dist_chisq.php#rchisq"],

        ["rf","dist_f.php#rf"], ["rnorm", "dist_norm.php#rnorm"], ["round"], ["rpois", "dist_pois.php#rpois"],

        ["rt","dist_t.php#rt"], ["runif","dist_unif.php#runif"], ["sample"], ["scatter"],

        ["search_if"], ["sequence"], ["simpson"], ["size"], ["skew"], ["solve"],

        ["stdev"], ["sum"], ["svd"], ["test_f"], ["test_sign"], 

        ["test_norm_ad"], ["test_t"], ["test_z"], ["tictoc"], 

        ["trans"], ["trapz"], ["tukey"], ["var"],

        ["fluid", StdFluidLib],

        ["plot", StdPlotLib],
        
        ["util", StdUtilLib]

    ];
    
    
    StdLibFunctions.sort();
  



  var StdLibClasses=[
      ["Array"], ["Complex"], ["Database"], ["DataFrame"], ["Food"], ["Matrix"], ["Range"], ["Vector"], ["Worksheet"]];
  
  
  