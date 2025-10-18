from Bio import SeqIO
from Bio.Seq import Seq
import os

# Replace 'your_username' with your actual computer username
# This path is for Windows; adjust if you are on Mac or Linux
fasta_file = r"C:\Users\ASUS\Downloads\BRCA1_DNA.fasta"

# Check if the file exists
if not os.path.isfile(fasta_file):
    print("FASTA file not found. Check the path.")
else:
    # Read the FASTA file
    for record in SeqIO.parse(fasta_file, "fasta"):
        seq = record.seq
        print("Sequence ID:", record.id)
        print("Sequence length:", len(seq))
        print("First 50 bases:", seq[:50])
        print("Nucleotide counts:")
        print("A:", seq.count("A"))
        print("T:", seq.count("T"))
        print("C:", seq.count("C"))
        print("G:", seq.count("G"))

        # Translate DNA to protein
        protein_seq = seq.translate()
        print("\nProtein sequence (first 50 amino acids):", protein_seq[:50])
