যদি আপনি রাউট প্যারামিটারকে ঐচ্ছিক করতে চান না এবং এটি নিশ্চিত করতে চান যে প্যারামিটারটি প্রদান করা হয়েছে, তাহলে আপনি প্যারামিটারটি `null` করতে পারবেন না এবং আপনাকে একটি বাধ্যতামূলক প্যারামিটার হিসেবেই সংজ্ঞায়িত করতে হবে। যদি ব্যবহারকারী প্যারামিটার প্রদান না করেন, তাহলে 404 পেজ অথবা অন্য একটি ত্রুটির পৃষ্ঠা রিটার্ন হবে।

### বাধ্যতামূলক প্যারামিটার রাউট উদাহরণ:

```php
Route::get('/book/{id}', function ($id) {
    return "<h1>The book name found: $id</h1>";
});
```

এখানে `{id}` প্যারামিটারটি বাধ্যতামূলক। যদি ইউআরএল থেকে `id` প্যারামিটার প্রদান করা না হয়, তাহলে লারাভেল একটি 404 ত্রুটি পৃষ্ঠা রিটার্ন করবে, কারণ এই রাউটে প্যারামিটার প্রদান বাধ্যতামূলক।

### ডিফল্ট মান প্রদান:

যদি আপনি `id` প্যারামিটারটিকে ঐচ্ছিক করতে চান কিন্তু এখনও চাইছেন যে কিছু মান প্রদান করা না হলে একটি ডিফল্ট আউটপুট প্রদান করা হোক, তবে প্যারামিটারটিকে ঐচ্ছিক হিসেবে চিহ্নিত করতে হবে এবং ফাংশনে ডিফল্ট মান নির্ধারণ করতে হবে:

```php
Route::get('/book/{id?}', function ($id = null) {
    if ($id) {
        return "<h1>The book name found: $id</h1>";
    } else {
        return "<h1>The id is invalid</h1>";
    }
});
```

এখানে `{id?}` ব্যবহার করে `id` প্যারামিটারটিকে ঐচ্ছিক হিসেবে চিহ্নিত করা হয়েছে এবং `$id = null` দ্বারা ডিফল্ট মান প্রদান করা হয়েছে।

### মূল পয়েন্ট:

-   যদি প্যারামিটারটি বাধ্যতামূলক হয়, তাহলে সেটি `null` হওয়া সম্ভব নয় এবং ইউআরএল-এ অবশ্যই প্রদান করতে হবে।
-   যদি আপনি প্যারামিটারকে ঐচ্ছিক করতে চান, তাহলে `{id?}` ব্যবহার করুন এবং ফাংশনে `$id` এর জন্য একটি ডিফল্ট মান নির্ধারণ করুন।

আশা করি এটি আপনার ধারণা পরিষ্কার করতে সাহায্য করবে!
