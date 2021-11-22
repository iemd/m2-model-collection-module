# Models and Collections
- Like most **modern frameworks and plateforms**, these days Magento embraces an **Object Relational Mapping (ORM)** approach over **raw SQL queries**.
- Though the underlying mechanism still comes down to SQL, we are now **dealing strictly with objects**.
- This makes our **application code** more **readable**, **manageable**, and **isolated** from **vendor-specific SQL** differences.
- Following are **three types of classes** working together to allow us **full entity data management**, from **loading**, **saving**, **deleting**, and **listing** entities.
### 1. Model
- The majority of our **data access and management** will be done via **PHP classes** called **Magento models**.
- Models themselves don't contain any code for communicating with the database.
- Calling **load**, **save** or **delete** methods on models get **delegated to resource classes**, as they are the ones to actually **read**, **write** and **delete** data from the database. 
### 2. Resource
- The **database communication part** is decoupled into its own **PHP class** called **resource class**.
- Each model is then assigned a resource class.
- Theoretically, with enough knowledge, it is possible to write new **resource classes** for **various database vendors**.
### 3. Collection
- Next to the **model and resource classes**, we have **collection classes**.
- We can think of a **collection** as an **array of individual model instances**.
- On the **base level**, **collections** extend from the `\Magento\Framework\Data\Collection` class, which implements `\IteratorAggregate` and `\Countable` from **Standard PHP Library (SPL)** and a few other **Magento-specific classes**.
#### More often than not, we look at model and resource as a single unified thing, thus simply calling it a model.
- Magento deals with **two types of models**, which we might categorize as:
    1. Simple model
    2. EAV model
## Understanding the flow of schema and data scripts
- Simply put, the role of **schema scripts** is to create a **database structure** supporting your module logic.
- For example, **creating a table** where our entities would persist their data.
- The role of the **data scripts** is to **manage the data within existing tables**, usually in the form of adding some **sample data during module installation**.
- For the **first time**, we run `php bin/magento setup:upgrade` against our module; while it still has no entries under `setup_module` table, magento will execute the files within the module `Setup` folder in following order:
    - InstallSchema.php
    - UpgradeSchema.php
    - InstallData.php
    - UpgradeData.php
- Every **subsequent upper module version** number change, followed by the console `php bin/magento setup:upgrade` command, would result in the following files being run in the order as listed:
    - UpgradeSchema.php
    - UpgradeData.php
- Additionally, Magento would record the **upped version number** under the `setup_module` database.
- Magento will only trigger **install or upgrade scripts** when the **version number in the database** is less than the **version number in the module.xml file**.


