
        /*
        0: function name
        1: category
        2: link

        if link does not exist explicitly, then link=functionname+.php

        */


var StdLibFunctions = [
        ["accumulate","utility"], ["activeworksheet", "utility"], ["anova", "stat"], ["anova2","stat"], 

        ["appendworksheet", "utility"], ["besselj", "math", "specialfuncs.php#besselj"], ["beta", "math", "specialfuncs.php#beta"],

        ["bisection","math"], ["boxplot", "stat"], ["const {}","utility", "const.php"], ["cor","stat"], ["count", "utility"],

        ["cov", "stat"], ["cumsum","stat"],

        ["cumtrapz","math"], ["cwd", "utility"], ["dbinom","stat","dist_binom.php#dbinom"],

        ["dchisq","stat","dist_chisq.php#dchisq"], ["det", "math"], ["df","stat","dist_f.php#df"],

        ["diag","math"], ["diff", "math"], ["dnorm","stat","dist_norm.php#dnorm"],

        ["dpois","stat","dist_pois.php#dpois"], ["dsignrank","stat","dist_wilcox_signrank.php#dsignrank"],

        ["dt","stat","dist_t.php#dt"], ["dunif","stat","dist_unif.php#dunif"],

        ["eig","math"], ["expfit","math"], ["eye","math"], ["find","utility","find.php#find"],

        ["find_if","utility","find.php#find_if"], ["findfirst_if","utility","find.php#findfirst_if"],

        ["find_minmax","utility","find.php#find_minmax"], ["for_each","utility"], ["gamma", "math", "specialfuncs.php#gamma"],

        ["gammaln", "math", "specialfuncs.php#gammaln"], ["gcd", "math"], ["inv", "math"], ["kurt","stat"],

        ["lcm", "math"], ["linspace", "math"], ["lm","stat"], ["logfit", "math"], ["lu", "math"],

        ["max", "stat","minmax.php#max"], ["mean","stat"], ["median", "stat"],

        ["meshgrid", "math"], ["minmax", "stat","minmax.php"], ["min", "stat","minmax.php#min"],

        ["mode", "stat"], ["newton", "math"], ["null", "math"], ["pbinom", "stat","dist_binom.php#pbinom"],

        ["pchisq","stat","dist_chisq.php#pchisq"], ["pf","stat","dist_f.php#pf"], ["plot","utility"],

        ["plothwnd","utility"], ["plotlayout","utility"], ["pnorm", "stat","dist_norm.php#pnorm"],

        ["ppois", "stat","dist_pois.php#ppois"], ["psignrank","stat","dist_wilcox_signrank.php#psignrank"],

        ["pt","stat","dist_t.php#pt"], ["polyfit", "math"], ["polyval","math"], ["powfit", "math"],

        ["psychrometry", "process"], ["punif","stat","dist_unif.php#punif"], ["qbinom", "stat","dist_binom.php#qbinom"],

        ["qchisq","stat","dist_chisq.php#qchisq"], ["qf","stat","dist_f.php#qf"], ["qnorm","stat","dist_norm.php#qnorm"],

        ["qpois", "stat", "dist_pois.php#qpois"], ["qsignrank","stat","dist_wilcox_signrank.php#qsignrank"],

        ["qt","stat","dist_t.php#qt"], ["qr", "math"], ["quantile","stat"], ["qunif","stat","dist_unif.php#qunif"],

        ["rand", "stat"], ["rank", "math"], ["rbinom", "stat","dist_binom.php#rbinom"], ["rchisq","stat","dist_chisq.php#rchisq"],

        ["rf","stat","dist_f.php#rf"], ["rnorm", "stat","dist_norm.php#rnorm"], ["round", "utility"], ["rpois", "stat", "dist_pois.php#rpois"],

        ["rt","stat","dist_t.php#rt"], ["runif","stat","dist_unif.php#runif"], ["sample", "stat"], ["scatter","utility"],

        ["search_if","utility"], ["sequence","stat"], ["simpson", "math"], ["size", "utility"], ["skew", "stat"], ["solve", "math"],

        ["stdev", "stat"], ["sum", "stat"], ["svd", "math"], ["test_f", "stat"], ["test_sign", "stat"], 

        ["test_norm_ad", "stat"], ["test_t", "stat"], ["test_z", "stat"],["thermofluid","process"], ["tictoc", "utility"],

        ["toarray", "utility"], ["tokenize","utility"], ["tomatrix", "utility"], ["totable", "utility"], ["tovector", "utility"], 

        ["trans", "math"], ["trapz", "math"], ["tukey", "stat"], ["var" , "stat"] ];
    
    
  
  var StdLibClasses=[
      ["Array","utility"],
      ["Food","process"],
      ["Database","utility"],
      ["DataFrame","utility"],
      ["Matrix", "math"],
      ["Range","utility"],
      ["Vector", "math"], 
      ["Worksheet","utility"]];