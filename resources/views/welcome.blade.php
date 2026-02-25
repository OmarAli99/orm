<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel ORM - Debug Mode</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* أهم تعديل: بنجبر الديبج بار يكون فوق أي حاجة */
        .phpdebugbar { z-index: 9999999 !important; }
        
        /* بنشيل الـ flex من الـ body ونخليه في wrapper */
        .main-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a]">

    <div class="main-wrapper p-6 lg:p-8">
        
        <div class="w-full max-w-4xl mx-auto shadow-2xl rounded-xl overflow-hidden border border-gray-100 dark:border-zinc-800 bg-white">
            <table class="table table-hover mb-0">
                <thead class="bg-[#1b1b18] text-white">
                    <tr>
                        <th class="p-4 text-center">#</th>
                        <th class="p-4">Name</th>
                        <th class="p-4 text-center">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td class="p-4 text-center">{{ $loop->iteration }}</td>
                        <td class="p-4 font-semibold">{{ $user->name }}</td>
                        <td class="p-4 text-center text-gray-500">{{ $user->email }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="p-10 text-center">لا توجد بيانات</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    </body>
</html>