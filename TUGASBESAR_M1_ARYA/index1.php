<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Inventory Master Data</title>
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <!-- Header Section -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Inventory Master Data</h1>
            <button onclick="alert('Open Add Item Modal')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition">
                + Add New Item
            </button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        
        <!-- Filters & Search Bar -->
        <div class="mb-6 flex flex-col sm:flex-row justify-between gap-4">
            <div class="flex gap-2 w-full sm:w-auto">
                <input type="text" placeholder="Search by SKU or Name..." class="border border-gray-300 rounded-lg px-4 py-2 w-full sm:w-80 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <select class="border border-gray-300 rounded-lg px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="hardware">Hardware</option>
                    <option value="safety">Safety Equipment</option>
                </select>
            </div>
            <div class="text-sm text-gray-500 self-center">
                Showing <strong>3</strong> of <strong>3</strong> master items
            </div>
        </div>

        <!-- Master Data Table -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg border border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-left">
                    <thead class="bg-gray-100 text-xs uppercase font-semibold text-gray-600 tracking-wider">
                        <tr>
                            <th class="px-6 py-3">SKU / Item Name</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Technical Specifications</th>
                            <th class="px-6 py-3">Base Unit</th>
                            <th class="px-6 py-3">Stock Level</th>
                            <th class="px-6 py-3 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-sm">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-medium text-gray-900">Industrial LED High Bay</div>
                                <div class="text-xs text-gray-500">SKU: ELEC-LED-001</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 text-xs font-semibold bg-blue-100 text-blue-800 rounded-full">Electronics</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-xs text-gray-700"><strong>Power:</strong> 150W | <strong>Voltage:</strong> AC220-240V</p>
                                <p class="text-xs text-gray-500">Lumens: 21,000 lm | IP65 Waterproof</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">PCS</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold text-green-600">140 Units</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-medium text-gray-900">Heavy Duty Hex Bolt</div>
                                <div class="text-xs text-gray-500">SKU: HDW-BLT-042</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 text-xs font-semibold bg-orange-100 text-orange-800 rounded-full">Hardware</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-xs text-gray-700"><strong>Size:</strong> M12 x 50mm | <strong>Material:</strong> Grade 8.8 Steel</p>
                                <p class="text-xs text-gray-500">Finish: Zinc Plated</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">BOX (100 pcs)</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold text-yellow-600">25 Boxes</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="font-medium text-gray-900">Industrial Safety Helmet</div>
                                <div class="text-xs text-gray-500">SKU: SFT-HLM-009</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Safety Equipment</span>
                            </td>
                            <td class="px-6 py-4">
                                <p class="text-xs text-gray-700"><strong>Standard:</strong> ANSI Z89.1 | <strong>Material:</strong> HDPE</p>
                                <p class="text-xs text-gray-500">Suspension: 4-Point Ratchet</p>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-600">PCS</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="font-semibold text-red-600">8 Units (Low)</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>
</html>