<?php 
require_once('header.php');
require_once('../src/databaseFunctions.php');

    if(isset($_POST['order'])){
        $order = $_POST['userID'];
        $newOrder = db_getData("Select * from orders INNER JOIN tickets ON orders.ticketID = tickets.id where orders.id = " . $order);
    }
?>
    <div class="page orderConfirmation">
        <div class="container">
            <h1>Bedankt voor de bestelling!</h1>
            <table class="orderOverview" border="1">
                <tr>
                    <th>Ticket</th>
                    <th>Aantal</th>
                    <th>Prijs</th>
                </tr>
                <tr>
                    <?php
                        while($orderDate = $newOrder->fetch_assoc()) {
                            ?>
                            <td><?php echo $_POST['ticketSelect'] ?></td>
                            <td><?php echo $_POST['amount'] ?></td>
                            <td>€ <?php echo $_POST['amount'] * $orderData['price']; ?></td>
                        <?php
                        }
                        ?>
                </tr>
            </table>
        </div>
    </div>
<?php require_once 'footer.php';?>