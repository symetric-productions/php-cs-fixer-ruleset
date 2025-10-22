# Upgrade to 1.2

## Use official custom rule set

```diff
 return (new Config())
     ->setParallelConfig(ParallelConfigFactory::detect())
-    ->setRules(Ruleset::rules())
+    ->registerCustomRuleSets([
+        new Ruleset(),
+    ])
+    ->setRules([
+        '@Symetric/Default' => true,
+    ])
     ->setRiskyAllowed(true)
     ->setFinder($finder)
 ;
```
