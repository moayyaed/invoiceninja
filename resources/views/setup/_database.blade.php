<div class="bg-white shadow overflow-hidden rounded-lg mt-6">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ ctrans('texts.database_connection') }}
        </h3>
        <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
            To store data, we need database. Here's how you can create one.
        </p>
    </div>
    <div>
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    You can use following commands to create user & database.
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <details>
                        <summary class="cursor-pointer focus:outline-none">Show code</summary>
                        <pre class="text-sm overflow-y-scroll bg-gray-100 p-4">
-- Commands to create a MySQL database and user
CREATE SCHEMA `ninja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE USER 'ninja'@'localhost' IDENTIFIED BY 'ninja';
GRANT ALL PRIVILEGES ON `ninja`.* TO 'ninja'@'localhost';
FLUSH PRIVILEGES;
                        </pre>
                    </details>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    {{ ctrans('texts.driver') }}
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="input border-none" name="database_driver" value="MySQL" readonly>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    {{ ctrans('texts.host') }}*
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="input" name="database_host" required>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    {{ ctrans('texts.database') }}*
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="input" name="database_db" required>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    {{ ctrans('texts.username') }}*
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="input" name="database_username" required>
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    {{ ctrans('texts.password') }}
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="password" class="input" name="database_password">
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:flex sm:items-center">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                    <button class="button button-primary py-2 px-3 text-xs">{{ ctrans('texts.test_connection') }}</button>
                </dt>
                <dd class="text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                    <div class="alert alert-success py-2 bg-gray-50">
                        Success!
                    </div>
                </dd>
            </div>
        </dl>
    </div>
</div>