<div class="dashboard">
    <div class="menu">
        <li>
            <button @click="displayDashboard()">
                <i class="fas fa-columns"></i> Dashboard
            </button>
        </li>
        <li>
            <button @click="displayPendingValidations()">
                <i class="fas fa-check"></i> Pending validations
            </button>
        </li>

        <li>
            <button @click="displayUsers()">
                <i class="fas fa-users"></i> Users
            </button>
        </li>

        <li>
            <button @click="displayPayments()">
                <i class="fas fa-money-bill-wave"></i> Payments
            </button>
        </li>

        <li>
            <button @click="displaySettings()">
                <i class="fas fa-cogs"></i> Settings
            </button>
        </li>

        <li>
            <button @click="displayTransactions()">
                <i class="fas fa-list"></i> Transactions
            </button>
        </li>


        <li>
            <button>
                <a href="">
                    <i class="fas fa-envelope"></i> Webmail
                </a>
            </button>
        </li>


    </div>

    <div class="content">
        <div class="content__infos">
            <div class="icons">


                <div class="icon">
                    <i class="fas fa-user"></i>
                    {{ username }}
                </div>

            </div>
        </div>
    </div>
</div>